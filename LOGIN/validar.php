<?php
$usuario = $_POST["usuario"];
$contrasenna = $_POST["contrasenna"];
include("../funciones.php");
include("../config.php");
$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contrasenna='$contrasenna'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);



if ($filas) {

    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:../index.php");

} else {
  include("login.php");
  alertaError('Usuario o contraseña incorrectos');
}
mysqli_free_result($resultado);
mysqli_close($conexion);
