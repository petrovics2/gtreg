<?php
    $connect = mysqli_connect('localhost', 'root', '', 'gtreg');
    $sql = "SELECT id FROM golyak WHERE golyae = 1 AND psw = null";
    $result = mysqli_query($connect, $sql);
    $forUpdate = array();
    foreach ($result as $row) {
        array_push($forUpdate, $row['id']);
    }
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*:,.";

    foreach ($forUpdate as $golyaId) {
        $password = substr(str_shuffle($chars), 0, 8);
        $sql = "UPDATE golyak
                SET psw = '" . $password . "', password_hashed = '" . password_hash($password, PASSWORD_DEFAULT) . "'
                 WHERE id = " . $golyaId . ";";
        if (mysqli_query($connect, $sql)) {
            echo "Sikeres frissítés!";
        } else {
            echo "Sikertelen frissítés<br>";
            echo $sql . "<br>";
            print_r(mysqli_error_list($connect));
        }
    }
?>  