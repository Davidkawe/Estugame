<?php
    $servername = "localhost";
    $username = "diego";
    $password = "diego.m.m";
    $database = "stugame";

    $nombre;
    $primApellido;
    $mail;
    $telefono;
    $nombreusu;
    $contra; 



    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    
    }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre=$_POST['nombre'];
    $primApellido=$_POST['primApellido'];
    $mail=$_POST['mail'];
    $telefono=$_POST['telefono'];
    $nombreusu=$_POST['usuario'];
    $contra= $_POST['contrasena'];


    
    $comprobarnom =check("SELECT numbreusuario FROM usuario WHERE numbreusuario = '".$nombreusu."'","Nombre de usuario existente",$conn);
    $comprobarmail= check( "SELECT telefono FROM usuario WHERE telefono = '".$telefono."'","Telefono existente",$conn);
    $comprobartel= check("SELECT mail FROM usuario WHERE mail = '".$mail."'","Mail existente",$conn);

    if($comprobarnom and $comprobarmail and $comprobartel){
        $sql = "INSERT INTO usuario (nombre, apellido1, mail, telefono,numbreusuario,contrasena)
        VALUES ('$nombre', '$primApellido', '$mail', '$telefono','$nombreusu','$contra')";
        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
            $conn->close();
        }else{
            echo "Error al insertar datos: " . $conn->error;
            $conn->close();
        }
    }
    
      
} function check($sql,$msg,$conn) {
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
