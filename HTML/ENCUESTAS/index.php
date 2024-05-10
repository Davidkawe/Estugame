<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
        <link rel="stylesheet" href="style.css">
        <title>Stugame</title>
    </head>

    <body>
        <div class="menu">
            <i class="fa fa-bars" title="Click me"></i>
            <ul>
                <li><a href="../Home/indext.html">home</a></li>
                <li><a href="../Usuario/login.html">cuenta</a></li>
            </ul>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="script.js"></script>
        <?php
            echo '<div class="slider-container">';
            session_start();
            $servername = "localhost";
            $username = "diego";
            $password = "diego.m.m";
            $database = "stugame";
            
            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sql = "SELECT MAX(id) FROM encuesta";
            $res= $conn->query($sql);
            if($res-> num_rows==1){
                while($row = $res->fetch_assoc()){
                $max=$row['MAX(id)'];
                }
            }

            $cont=($_GET['val']);
            $total= array();

            while($cont<=$max){
                $sql = "SELECT id FROM encuesta WHERE id = '".$cont."'";
                $res= $conn->query($sql);

                if($res-> num_rows==1){    
                    echo '<div class="slide" id="slide"> <!--Lo unico que hay que hacer es que cuando pulses el boton cambie el id de la encuesta
                    y hacer un select de cada cosa-->';

                    $sql = "SELECT nombre FROM encuesta WHERE id = '".$cont."'";
                    $res= $conn->query($sql);

                    if($res-> num_rows==1){
                        while($row = $res->fetch_assoc()){
                            echo '<h1 class="Tipo">'.$row['nombre'].'</h1><br>';
                            $sql = "SELECT id FROM encuesta WHERE nombre = '".$row['nombre']."'";
                            $control = $conn->query($sql);

                            $row = $control->fetch_assoc();
                            $_SESSION['idenc']= $row['id'];
                            $total[]= $row['id'];
                        }
                    }

                    $sql = "SELECT imagen FROM encuesta WHERE id = '".$cont."'";
                    $res= $conn->query($sql);
                    if($res-> num_rows==1){
                        while($row = $res->fetch_assoc()){
                            echo '<img src="../EmpresasPage/img/'.$row['imagen'].'"><br>';
                        }
                    }

                    $sql = "SELECT texto FROM encuesta WHERE id = '".$cont."'";
                    $res= $conn->query($sql);

                    if($res-> num_rows==1){
                        while($row = $res->fetch_assoc()){
                        echo '<p class="descripcion">'.$row['texto'].'</p></div>';
                        }
                    }
                }
                $cont+=1;
            }
            $_SESSION['idemdef']=($total[($_GET['val'])]);

            echo'</div>
            <div class="button-container">
            <button id="positiveBtn" class="button"><a class="start-button" href="validar_insercion_votos.php?index='.$_GET['val'].'"><h2>A favor</h2></a></button>
                <button id="negativeBtn" class="button"><h2>En contra</h2></button>
            </div>'; 
        ?>
    </body>
</html>