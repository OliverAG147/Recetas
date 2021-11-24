<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form action="registrar.php" method="post">
    <section id="Login-Registro">
        <h4>Registro</h4>
       <!---- <p class="parrafo">Entra con:</p>
        <div class="Redes-Sociales">
           <button class="google" type="button"><i class="fab fa-google"></i>
           <span class = "button__G">Google</span></button>
        <button class="facebook" type="button"><i class="fab fa-facebook"></i>
        <span class = "button__F">Facebook</span></button>
       </div> ----->
        <hr/>
         <!----<p class="parrafo">o Ingresa tus datos:</p>----->
        <input class="controls" type="text" name="usuario" id="usuario" placeholder="Ingrese su Nombre de usuario">
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
        <input class="check-box" type="checkbox" class="deacuerdo" p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" type="submit" value="Registrarme">
        <p><a class="cuenta-ya" href="index.php">¿Ya Tengo Cuenta?</a></p>
    </section>
    </form>
</body>

</html>