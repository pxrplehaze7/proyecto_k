<?php
$usuario = $_POST["usuario"];
$contrasenna = $_POST["contrasenna"];

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
?>
  <section>
    <div class="square_box box_three"></div>
    <div class="square_box box_four"></div>
    <div class="container mt-5">
      <div class="row">

      
        <div class="col-sm-12">
          <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
            <button type="button" class="close font__size-18" data-dismiss="alert">
              <span aria-hidden="true">
                <i class="fa fa-times danger "></i>
              </span>
              <span class="sr-only">Close</span>
            </button>
            <i class="start-icon far fa-times-circle faa-pulse animated"></i>
            <strong class="font__weight-semibold">Oh snap!</strong> Change a few things up and try submitting again.
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
