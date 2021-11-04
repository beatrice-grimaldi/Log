<?php
        include_once "conexionbd.php";
        $conn = connectdb();

        $new_user = $_POST["usuario"];
        $new_pw = md5($_POST["pw"]);
        $new_name = $_POST["name"];
        $new_Lname = $_POST["Lname"];

        $sql = "INSERT INTO `usuario`(`user`, `pw`, `Name`, `Lname`)
        VALUES ('$new_user', '$new_pw', '$new_name', '$new_Lname')";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php?crea=true');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        disconnectdb($conn)
?>