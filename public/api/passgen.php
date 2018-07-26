<?php
    include_once("./config/database.php");
    $sql = "SELECT id FROM golyak WHERE golyae = 1 AND code is null";
    echo "<br>" . $sql . "<br>";
    $result = mysqli_query($conn, $sql);
    print_r($result);
    $forUpdate = array();
    foreach ($result as $row) {
        array_push($forUpdate, $row['id']);
    }
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*:,.";

    foreach ($forUpdate as $golyaId) {
        $password = substr(str_shuffle($chars), 0, 8);
        $sql = "UPDATE golyak SET code = '" . $password . "' WHERE id = " . $golyaId . ";";
        if (mysqli_query($conn, $sql)) {
            echo "Sikeres frissítés!";
        } else {
            echo "Sikertelen frissítés<br>";
            echo $sql . "<br>";
            print_r(mysqli_error_list($conn));
        }
    }
?>  