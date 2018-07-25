<?php

header('Location: index.php');
/*     session_start();
    foreach ($_POST as $adat => $value) {
        echo $adat . ": " . $value . "<br>";
    }

    $errors = [];

    if (isset($_POST['name'])) {
        if (!isset($_POST['name'])) {
            array_push($errors, "Kérlek írd be a neved!");
        }
        if (!isset($_POST['email'])) {
            array_push($errors, "Kérlek írd be az e-mail címed!");
        }
        if (!isset($_POST['address'])) {
            array_push($errors, "Kérlek írd be a lakcímed!");
        }
        if (!isset($_POST['telnumber'])) {
            array_push($errors, "Kérlek írd be a telefonszámodat!");
        }
        if (!isset($_POST['gdpr'])) {
            array_push($errors, "Kérlek olvasd el és fogad el az adatkezelési szabályzatot!");
        }
        if (!preg_match('/^([0-9a-z\.-]+)+@([0-9a-z-]+)+\.([a-z]{2,4})/',$_POST['email'])) {
            array_push($errors, "Kérlek valódi e-mail címet adj meg!");
        }
        if (!preg_match('/(\+36|06)([0-9]{8,9})/',$_POST['telnumber'])) {
            array_push($errors, "Kérlek valódi telefonszámot adj meg!");
        }

        $nev = $_POST['name'];
        $email = $_POST['email'];
        if ($_POST['gender'] == 1) {
            $nem = 1;
        } else {
            $nem = 0;
        }
        $lakcim = $_POST['address'];
        $telefon = $_POST['telnumber'];
        $szak = $_POST['szak'];
        if (isset($_POST['allergy'])) {
            $allergia = $_POST['allergy'];
        }
        else {
            $allergia = "";     
        }
        if (isset($_POST['eating'])) {
            $fogyi = $_POST['eating'];
        }
        else {
            $fogyi = "";
        }
        $polo = $_POST['tshirt'];
        if (isset($_POST['kedd'])) {
            $kedd = 1;
        } else {
            $kedd = 0;
        }
        if (isset($_POST['szerda'])) {
            $szerda = 1;
        } else {
            $szerda = 0;
        }
        if (isset($_POST['csutortok'])) {
            $csutortok = 1;
        } else {
            $csutortok = 0;
        }
        if (isset($_POST['pentek'])) {
            $pentek = 1;
        } else {
            $pentek = 0;
        }
        if (isset($_POST['szombat'])) {
            $szombat = 1;
        } else {
            $szombat = 0;
        }
        if (isset($_POST['egyeb'])) {
            $egyeb = $_POST['egyeb'];
        } else {
            $egyeb = "";
        }

        $servername = "localhost";
        $username = "bceocsi";
        $password = "bocsi971";
        $dbname = "bceocsi_gtreg";

        $connect = new mysqli($servername, $username, $password, $dbname);
        $stmt = $connect->prepare('INSERT INTO golyak (nev, email, nem, lakcim, telefonszam, szak, allergia, etel, polomeret, kedd, szerda, csutortok, pentek, szombat, egyeb) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param("ssissssssiiiiis", $nev, $email, $nem, $lakcim, $telefon, $szak, $allergia,$fogyi, $polo, $kedd, $szerda, $csutortok, $pentek, $szombat, $egyeb);
        if ($stmt->execute()) {
            if (sizeof($errors) == 0) {
                unset($errors);
                header('Location: success.php');
            }
            else {
                print_r($stmt->error);
                if ($stmt->errno == 1062) {
                    array_push($errors, "Ezekkel az adatokkal valaki már regisztrált!");
                }
                $_SESSION['errors'] = $errors;
                header('location: regisztracio.php');
            }       
        }
    }
    else {
        header('Location: regisztracio.php');
    }     */
?>