<?php
    $conn = new mysqli('localhost', 'root', '', 'golyak');
    $sql = 'SELECT * FROM golyak';
    $result=$conn->query($sql);

    $now = new DateTime();
    $fileName = $now->format('Ymd_His') . ".csv";
    $csv = fopen('../excels/'.$fileName, "w", true);
    $elsoSor = ['id', 'nev', 'email', 'nem', 'lakcim', 'telefonszam', 'szak', 'allergia', 'etel', 'polomeret', 'kedd', 'szerda', 'csutortok', 'pentek', 'szombat', 'egyeb', 'code', 'golyae'];
    fputcsv($csv, $elsoSor);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sor = array();
            foreach ($row as $key => $value) {               
               if ($key == "nem") {
                   echo $key . ": ";
                   if ($value == 1) {
                       echo "férfi<br>";
                        $sor[] = "férfi";
                   } else {
                        echo "nő<br>";
                        $sor[] = "nő";
                   }                   
               } elseif ($key == "kedd") {
                    echo $key . ": ";
                    if ($value == 1) {
                        echo "igen <br>";
                        $sor[]= "igen";
                    } else {
                        echo "nem <br>";
                        $sor[]= "nem";
                    } 
               } elseif ($key == "szerda") {
                    echo $key . ": ";
                    if ($value == 1) {
                        echo "igen <br>";
                        $sor[]= "igen";
                    } else {
                        echo "nem <br>";
                        $sor[]= "nem";
                    } 
                } elseif ($key == "csutortok") {
                    echo $key . ": ";
                    if ($value == 1) {
                        echo "igen <br>";
                        $sor[]= "igen";
                    } else {
                        echo "nem <br>";
                        $sor[]= "nem";
                    } 
                } elseif ($key == "pentek") {
                    echo $key . ": ";
                    if ($value == 1) {
                        echo "igen <br>";
                        $sor[]= "igen";
                    } else {
                        echo "nem <br>";
                        $sor[]= "nem";
                    } 
                } elseif ($key == "szombat") {
                    echo $key . ": ";
                    if ($value == 1) {
                        echo "igen <br>";
                        $sor[]= "igen";
                    } else {
                        echo "nem <br>";
                        $sor[]= "nem";
                    } 
                } else {
                    echo $key . ": " . $value . "<br>";
                    $sor[]= $value;
                }                
            }
            print_r($sor);
            fputcsv($csv, $sor);
        }
    }
    $conn->close();
?>