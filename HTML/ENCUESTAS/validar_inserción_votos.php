<?php
    session_start();
    $servername = "localhost";
    $username = "diego";
    $password = "diego.m.m";
    $database = "stugame";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $idusu=$_SESSION["id"];
    $idenc=($_SESSION["idemdef"]);
    $num=(int)($_GET['index']);
    echo $idenc;

    $sql = "INSERT INTO estudiovoto (idusuario, idencuesta, Positivos, Negativos)
    VALUES ('$idusu','$idenc',1,0)";
    (int)($num+=1);

    if ($conn->query($sql) === TRUE) {
        header("Location: validar_insercion_votos.php?val='$idenc',index='$num'");

        $conn->close();
    }else{
        echo "Error al insertar datos: " . $conn->error;
        $conn->close();
    }
?>