<?php  
    function connectdb(){    
        $serverbd = "localhost";
        $userbd = "root";
        $pwbd = "";
        $bd = "logindb";

        $conn = mysqli_connect($serverbd, $userbd, $pwbd, $bd);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
        return $conn;
    }

    function disconnectdb($conn){
        $close = mysqli_close($conn)
            or die("Ha sucedido un error inesperado en la desconexión de la base de datos");
        
        return $close;
    }
?>