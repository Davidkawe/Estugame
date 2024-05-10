<?php
    $servername = "localhost";
    $username = "diego";
    $password = "diego.m.m";
    $database = "stugame";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre=$_POST['nombreem'];
        $mail=$_POST['mailem'];
        $telefono=$_POST['telefono'];
        $nif=$_POST['nif'];
        $contra= $_POST['contrasena'];
        
        $comprobarnom =check("SELECT id FROM empresa WHERE NIF = '".$nif."'","nif existente",$conn);
        $comprobarmail= check( "SELECT id FROM empresa WHERE telefono = '".$telefono."'","Telefono existente",$conn);
        $comprobartel= check("SELECT id FROM empresa WHERE mail = '".$mail."'","Mail existente",$conn);

        if($comprobarnom and $comprobarmail and $comprobartel){
            $sql = "INSERT INTO empresa (nombre, contraseña, mail, telefono,nif)
            VALUES ('$nombre', '$contra', '$mail', '$telefono','$nif')";
            if ($conn->query($sql) === TRUE) {
                echo "Datos insertados correctamente";
                $conn->close();
            }else{
                echo "Error al insertar datos: " . $conn->error;
                $conn->close();
            }
        }
    }

    function check($sql,$msg,$conn) {
        $result = $conn->query($sql);
        $res;
        if(!$result){
            echo "Error en la consulta: " . $conn->error;
            $res = false;
        }
        if($result->num_rows == 0){
            $res= true;

        }else{
            message($msg, $conn);
            $res= false;
        }
        return $res;
    }

    function message($msg, $conn) {
        echo $msg;
        $conn->close();
    }
?>