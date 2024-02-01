<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php
        $data =(date("d-m-y"));
        echo "Oggi è il $data buona giornata!";
        echo "$data $data $data";

        echo "<br>";
        $squadra1=["gregorio","matteo","milena","snizhana", "trixia","vincenzo", "mario","maria","katerina", "pippo","paperino"];
        $squadra2=["gregorio","matteo","milena","snizhana", "trixia","vincenzo", "cicco","franco","fantozzi", "viktor","paperino"];
        $squadra3=["flanella","cotone","canapa","lino", "seta","vincenzo", "cicco","franco","fantozzi", "viktor","paperino"];
        
        //guarda l'etichetta!!! se l'etichetta è uguale diventa un casino!!!
        $tutte=["Milano"=>$squadra1, "Venezia"=>$squadra2, "Torino"=>$squadra3];
        echo "<br>";
        print count($tutte);

        $partite=[[$squadra1,$squadra2], [$squadra1,$squadra3]];

        $first_names = array_column($partite, 'partita');

        $serieA=["A" => [$partite], "B" => [$partite]];

        foreach($serieA as $key => $value){
            echo $key ;
            foreach ($tutte as $key => $value){
                echo "<ul>Sono il valore di " . $key . " : " ;
                    foreach($value as $giocatore){
                        echo "<li>  $giocatore </li>";
                    }
                echo "</ul>";
            };
        };

        foreach ($partite as $key => $value){
            echo "<li>Sono il valore di " . $key . " : " . $value . "</li>";
        }


        $partite = [];
        echo date("l");
        echo "<br>";
        echo date('l jS \of F Y h:i:s A');


    ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">#</th>
                    <th scope="col" colspan="2" style="text-align: center">Partita</th>
                </tr>
                <tr>
                    <?php foreach($tutte as $key => $value) { ?>
                    <th scope="col" style="text-align: center"> <?php echo $key; }  ?> </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($i=0; $i<11; $i++){
                        echo "<tr>
                            <th>$i</th>
                            <td>$squadra1[$i]</td>
                            <td>$squadra2[$i]</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <table class="table">
    <thead>
        <tr>
            <th scope="col" rowspan="2">#</th>
            <th scope="col" colspan="2" style="text-align: center">Partita</th>

            <th scope="col" colspan="2" style="text-align: center">Partita</th>
        </tr>
        <tr>
            <th scope="col" style="text-align: center">squadra1</th>
            <th scope="col" style="text-align: center">squarda2</th>

            <th scope="col" style="text-align: center">squadra1</th>
            <th scope="col" style="text-align: center">squarda2</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            for($i=0; $i<11; $i++){
                echo "<tr>
                    <th>$i</th>
                    <td>$squadra1[$i]</td>
                    <td>$squadra2[$i]</td>
                    </tr>";
            }
        ?>
    </tbody>
    </table>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>