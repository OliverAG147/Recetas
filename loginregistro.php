<?php

include "bd.php";
error_reporting(0);
session_start();

if(isset($_SESSION["usuario"])){
    header("location: home.php");
}

if(isset($_POST["btnregistrar"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];


    if($password==$cpassword){
        $consul="SELECT * FROM usuario WHERE email_usuario='$email'";
        $resultado = mysqli_query($conexion, $consul);
        if(!$resultado->num_rows > 0){
            $consul="INSERT INTO usuario (name_usuario,email_usuario,password_usuario) 
            VALUE ('$username', '$email', '$password')";
            $resultado=mysqli_query($conexion,$consul);

            if($resultado){
                echo "<script>alert(Usuario registrado con éxito)</script>";
                $username="";
                $email="";
                $_POST["password"]="";
                $_POST["cpassword"]="";
            }else{
                echo "<script>alert('Hay un error')</script>";
            }

        }else{
            echo "<script>alert('El correo ya existe')</script>";
        }
    }else{
        echo "<script>alert('Las contraseñas no coinciden')</script>";
    }
}

?>

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
    <form action="" method="POST">
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
        <input class="controls" type="text" name="username" id="uusername" value="<?php echo $username; ?>" required placeholder="Ingrese su nombre de usuario">
        <input class="controls" type="email" name="email" id="email" value="<?php echo $email; ?>" required placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required placeholder="Contraseña">
        <input class="controls" type="password" name="cpassword" id="cpassword" value="<?php echo $_POST['cpassword']; ?>" required placeholder="Confirmar contraseña">
        <input class="check-box" type="checkbox" class="deacuerdo" p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" type="submit" name="btnregistrar" value="Registrarme">
        <p><a class="cuenta-ya" href="index.php">¿Ya Tengo Cuenta?</a></p>
    </section>
    </form>
</body>

</html>