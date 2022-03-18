<?php
$usuario = $_POST['usuario'];
$contrasenna = $_POST['contrasenna'];
$contrasenna_confirmar = $_POST['contrasenna-confirmar'];

include("../config.php");
include("../funciones.php");
$consulta = "SELECT Usuario FROM usuarios WHERE Usuario = '$usuario'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) { //distinto a 0
    include('registro.php');
    alertaError('Usuario ya existe');
} else if ($contrasenna == $contrasenna_confirmar) {
    include('registro.php');
    alertaError('Las contraseñas no coinciden');
} else {
    $insertar = "INSERT INTO usuarios(Usuario, Contrasenna) VALUES ('$usuario', '$contrasenna')";
    if (mysqli_query($conexion, $insertar)) { //si la funcion mysqli_query devuelve true al ejecutar el insert
        include("registro.php");
        alertaExito('Se ha registrado satisfactoriamente');
    } else {
        alertaError('Intente más tarde');
    }
}
