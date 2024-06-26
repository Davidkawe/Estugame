<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Inicio Sesion</title>
    </head>

    <body>
        <script src="script.js"></script>

        <div class="container" id="container">
            <div class="form-container empresas-container">
                <form action="validar_insercion_empresa.php" method="post">
                    <h1>Crea tu Empresa</h1>
                    <div class="junto">
                        <input type="text" placeholder="Nombre de Empresa" id="NomEmpresa" name="nombreem" class="identidad" required/>
                        <input type="text" placeholder="NIF" id="nif" name="nif" required/>
                    </div>
                    <div class="junto">
                        <input type="email" id="email" placeholder="Email" name="mailem" class="identidad" required/>
                        <input type="text" placeholder="Telefono" id="telefono" name="telefonoem" required/>
                    </div>
                    <input type="password" placeholder="Contraseña" name="contrasenaem" required/>
                    <button onclick="redireccionar()" id="RegEmpresa">Registrate</button>
                    <p>¿Ya tienes cuenta? <a class="Registrate" href="../Usuario/login.html">Inicia Sesión</a></p>
                </form>
            </div>

            <div class="form-container sign-in-container">
                <form action="validar_insercion.php" method="post">
                    <h1>Registrate</h1>
                    <div class="A">
                        <input type="text" placeholder="Nombre de Usuario" id="usuario" name="usuario" class="ab" required/>
                        <input type="password" placeholder="Contraseña" name="contrasena" required/>
                    </div>
                    <div class="junto">
                        <input type="text" placeholder="Nombre" id="nombre" name="nombre" class="identidad" required/>
                        <input type="text" placeholder="1º Apellido" id="apellido" name="primApellido" class="identidad" required/>
                        <input type="text" placeholder="2º Apellido" id="apellido" name="secApellido" required/>
                    </div>
                    <div class="B">
                        <input type="email" id="email" placeholder="Email" class="ba" name="mail" required/>
                        <input type="text" placeholder="Telefono" id="telefono" name="telefono" required/>
                    </div>
                    <button id="RegUsuario">Registrate</button>
                <p>¿Ya tienes cuenta? <a class="Registrate" href="../Usuario/login.html">Inicia Sesión</a></p>
                </form>
            </div>

            <!--Este contenedor cambia de lado tapando -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>¡Bienvenido de vuelta!</h1>
                        <p>¿A que esperas para seguir influyendo en tus videojuegos favoritos?</p>
                        <button class="ghost" id="signIn">usuario</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>¿Eres una empresa?</h1>
                        <p>!Puedes acceder a tus encuentas por aquí!</p>
                        <button class="ghost" id="signUp">empresa</button>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span>
        </section>
    </body>
</html>
