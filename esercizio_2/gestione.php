<?php

    // $arr = [
    //     "nome"=>[$_POST['name']],
    //     "cognome"=>[$_POST['surname']],
    //     "immagine"=>[$_POST['mioFile']], // 285 KB
    // ];


    // $file_name = $_FILES["name"];
    // $file_name = $_FILES["surname"];
    if( isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['mioFile']) ) {
        //var_dump($_POST);
        echo '<h1> POST: ' . $_POST['name'] . ' ' . $_POST['surname'] . " " . $_POST['mioFile'] . '</h1>';
    };


    var_dump($_FILES['mioFile']);
    $file_name = $_FILES["mioFile"]["name"];
    $file_type = $_FILES["mioFile"]["type"];
    $file_size = $_FILES["mioFile"]["size"]; // in KB

    $target_dir = "uploads/";

    if(!empty($_FILES['mioFile'])) {
        if($file_type === 'image/jpg') {
            if($file_size < 400000) {
                // is_uploaded_file è una funzione predefinita di PHP che controlla se un file è presente o meno
                if(is_uploaded_file($_FILES['mioFile']["tmp_name"]) && $_FILES['mioFile']["error"] === UPLOAD_ERR_OK) {
                    // move_uploaded_file è una funzione predefinita di PHP che mi permette di spostare un file 
                    // caricato nella cartella temporanea in una cartella definitiva
                    if(move_uploaded_file($_FILES['mioFile']["tmp_name"], $target_dir.$file_name)) {
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


    session_start(); // inizializza una sessione su browser del client
    $_SESSION['user'] = 'Mario Rossi';
    session_write_close();
    var_dump($_SESSION);




    //header("location: http://localhost/IFOA/eserciziPHP/esercizio_2/")


?>