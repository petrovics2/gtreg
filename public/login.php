<?php
    $connect = new mysqli('localhost', 'bceocsi', 'bocsi971', 'golyak');
    

    foreach ($_POST as $adat => $value) {
        echo $adat . ": " . $value . "<br>";
    }

    $email = $_POST['email'];
    $pw = $_POST['jelszo'];

    $stmt = $connect->prepare("SELECT password_hashed FROM golyak WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows==0) {
        echo("No Rows");
    } else {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($pw, $row['password_hashed'])) {
                header("Location: login_succes.php");
            }
            else {
                header("Location: bejelentkezes.php");
            }
        }
    }
?>