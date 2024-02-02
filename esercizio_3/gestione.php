<?php
    session_start();

    //var_dump($_FILES['image']);
    //print_r($_REQUEST);

    $contacts = isset($_SESSION['contacts'])  ?  $_SESSION['contacts'] : [] ;
    $target_dir = "uploads/";

    if(!empty($_FILES['image'])) {
        if($_FILES['image']["type"] === 'image/png' || $_FILES['image']["type"] === 'image/jpg') {
            if($_FILES['image']["size"] < 400000) {
                if(is_uploaded_file($_FILES['image']["tmp_name"]) && $_FILES['image']["error"] === UPLOAD_ERR_OK) {
                    if(move_uploaded_file($_FILES['image']["tmp_name"], $target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'])) {
                        echo 'Caricamento avvenuto con successo';
                    } else {
                        echo 'Errore!!!';
                    }
                }
            } else {
                echo 'FileSize troppo grande';
            }
        } else {
            echo 'FileType non supportato';
        }
    }
        
    $strNome = htmlspecialchars($_REQUEST['firstname']);
    $strCognome = htmlspecialchars($_REQUEST['lastname']);
    $strCity = htmlspecialchars($_REQUEST['city']);
    $strPhone = htmlspecialchars($_REQUEST['phone']);
    $strEmail = htmlspecialchars($_REQUEST['email']);

    //se la stringa è vuota
    if($strNome){
        if($strCognome){
            if($strCity){
                if($strPhone){
                    if(filter_var($strEmail, FILTER_VALIDATE_EMAIL)) {
                        echo "$strEmail è un valore valido <br/>";
                        $contact = [
                            'Firstname' => $_REQUEST['firstname'], 
                            'Lastname' => $_REQUEST['lastname'], 
                            'City' => $_REQUEST['city'], 
                            'Phone' => $_REQUEST['phone'],  
                            'Email' => $_REQUEST['email'],
                            'Image' => $target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname']];
                            
                            $to = 'example@example.com'; // indirizzo email del destinatario
                            $subject = 'Invio email di test'; // Oggetto della mail
                            $message = 'Questa è una mail inviata dal server'; // Corpo della mail
                            $additional_headers = 'From: no-reply@example.com, Reply-to: webmaster@example.com'; // Headers addizionali opzionali
                            $additional_params = ''; // Ulteriori parametri opzionali

                            mail($to, $subject, $message, $additional_headers);

                        header('Location: http://localhost/IFOA/eserciziPHP/esercizio_3/login.php');
                    } else {
                        echo "$strEmail  NON è una valore valido";
                    }
                }else{
                    echo "telefono mancante";
                }
            }else{
                echo "città mancante";
            }
        }else{
            echo "cognonome mancante";
        }
    }else{
        echo "nome mancante";
    }

    // $email = 'example@example.com';
    // if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo "$email è un valore valido <br/>";
    // } else {
    //     echo "$email  NON è una valore valido";
    // }

    // $url = 'http://www.example.com';
    // if(filter_var($url, FILTER_VALIDATE_URL)) {
    //     echo "$url è un valore valido <br/>";
    // } else {
    //     echo "$url  NON è una valore valido";
    // }

    $_SESSION['contacts'] = [...$contacts, $contact];
    var_dump($_SESSION);

    session_write_close();
?>