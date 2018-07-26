<?php
    if (!isset($_POST['nev'])) {
        header('location: regisztracio.php');
    } else {
        print_r($_POST);
        $conn = new mysqli('localhost', 'root', '', 'golyak');
        if ($conn->connect_errno > 0) {
            die("Nem lehet csatlakozni [" . $conn->connect_error . "]");
        }
        
        $nev = $_POST['nev'];
        $email = $_POST['email'];
        $nem = $_POST['nem'];
        $lackim = $_POST['lakcim'];
        $telefonszam = $_POST['telefonszam'];
        $szak = $_POST['szak'];
        $allergia = $_POST['allergia'];
        $etel = $_POST['etel'];
        $polo = $_POST["polomeret"];
        if (isset($_POST["kedd"])) {
            $k = 1;
        } else {
            $k = 0;
        }
        if (isset($_POST["szerda"])) {
            $sze = 1;
        } else {
            $sze = 0;
        }     
        if (isset($_POST["csütörtök"])) {
            $cs = 1;
        } else {
            $cs = 0;
        }    
        if (isset($_POST["péntek"])) {
            $p = 1;
        } else {
            $p = 0;
        }
        if (isset($_POST["szombat"])) {
            $szo = 1;
        } else {
            $szo = 0;
        }
        $egyeb = $_POST["egyeb"];
        $sql="INSERT INTO golyak (nev, email, nem, lakcim, telefonszam, szak, allergia, etel, polomeret, kedd, szerda, csutortok, pentek, szombat, egyeb) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssissssssiiiiis', $nev, $email, $nem, $lackim, $telefonszam, $szak, $allergia, $etel, $polo, $k, $sze, $cs, $p, $szo, $egyeb);
        $stmt->execute();
        if ($conn->errno == 1062) {
            header("Location: masRegisztralt.php");
        }
        elseif ($conn->errno > 0) {
            print_r($conn->error_list);
            print_r($stmt->error_list);
        } else {
            header("Location: regSucces.php");
        }
        
        
    }
?>