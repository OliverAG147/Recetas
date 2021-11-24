<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form action="validar.php" method="post">
    <section id="Login-Inicio">
        <h5>Login</h5>
        <hr/>
        <input class="controls" type="text" name="usuario" placeholder="usuario">
        <input class="controls" type="password" name="contraseña" placeholder="contraseña">
        
        <input class="botons" type="submit" name="" value="Ingresar">
        <p><a class="olvidar" href="loginregistro.php">¿No estas registrado?</a></p>
    </section>
    </form> 
</body>

</html>