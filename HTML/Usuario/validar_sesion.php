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

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $mailusu=$_POST['email'];
    $contra= $_POST['password'];
    
    $sql = "SELECT id FROM usuario WHERE mail = '".$mailusu."'";
    $control = $conn->query($sql);

    

    $row = $control->fetch_assoc();
    $_SESSION['id']= $row['id'];

    
    
    if($control->num_rows == 1){
        $sql = "SELECT id FROM usuario WHERE contrasena='".$contra."'";
        $control = $conn->query($sql);
        if($control->num_rows == 1){
            header("Location: prueba.php");
        }else{
            header("Location: login.php?control=3");
        }
        
    }else{
        
        header("Location: login.php?control=2");
    }

} 

?>
