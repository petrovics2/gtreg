<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once('./config/database.php');
    include_once('./config/golyak.php');

    $database = new Database();
    $db = $database->getConnection();

    $golya = new Golya($db);
    // get posted data
    $data = json_decode(file_get_contents("php://input"));

    $golya->nev =   $data->nev;
    $golya->email = $data->email;
    $golya->nem = $data->nem;
    $golya->lakcim = $data->lakcim;
    $golya->telefonszam = $data->telefonszam;
    $golya->szak = $data->szak;
    $golya->allergia = $data->allergia;
    $golya->etel = $data->etel;
    $golya->polomeret = $data->polomeret;
    $golya->kedd = $data->kedd;
    $golya->szerda = $data->szerda;
    $golya->csutortok = $data->csutortok;
    $golya->pentek = $data->pentek;
    $golya->szombat = $data->szombat;
    $golya->egyeb = $data->egyeb;

    if ($golya->create()) {
        echo '{';
            echo '"message: " "Golya was created."';
        echo '}';
    } else {
        echo '{';
            echo '"message": "Unable to create golya."';
        echo '}';
    }
?>