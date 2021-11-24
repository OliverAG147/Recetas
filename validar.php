<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('bd.php');

$consulta="SELECT*FROM usuario where name_usuario='$usuario' and password_usuario='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error de autentificación</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
