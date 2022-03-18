<?php
function verificarSesion (){
    return isset ($_SESSION['usuario']); //funcion devuelve true o false
}

function cerrarSesion (){
    session_destroy();
}

?>

