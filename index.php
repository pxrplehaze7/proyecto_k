<?php
include("config.php");
include("funciones.php");
session_start();
//echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio | K</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Instagram
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <?php
                    if (verificarSesion() == false) {
                        //if (!verificarSesion(){       lo mismo de arriba
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login/login.php">Ingresar</a>
                        </li>

                    <?php
                    }
                    ?>

                </ul>

                <?php
                if (verificarSesion()) {
                ?>
                    <form action="logout.php" class="d-flex" method="post">
                        <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesión</button>
                    </form>
                <?php
                }
                ?>



            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">



            <?php


            $sql = "SELECT ID_usuario, Usuario, Fecha, Titulo, Ruta, Texto
                    FROM posts, usuarios 
                    WHERE ID_usuario=ID";

            $result = mysqli_query($conexion, $sql);  //se almacena el resultado de la query, aqui la ejecuta

            // $ruta_origen = "file://". $_SERVER['DOCUMENT_ROOT']."/proyecto_k/";

            while ($mostrar = mysqli_fetch_array($result)) {  //Recorre todos los registros del $result y los almacena en mostrar

                $mostrarRuta = $mostrar['Ruta'];

            ?>


                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $mostrarRuta; ?>" class="card-img-top" alt="ERROR">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar['Titulo']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $mostrar['Usuario']; ?> - <?php echo $mostrar['Fecha']; ?></h6>
                            <p class="card-text"><?php echo $mostrar['Texto']; ?></p>
                            <a href="#" class="btn btn-outline-danger"><i class="fa-solid fa-heart"></i></a>
                        </div>
                    </div>
                </div>

                <?php
                /*                 $dir=__DIR__;
                $resultado = str_replace("\\", "/", $dir);
                echo $resultado.'/'.$mostrar['Ruta'];
                REEMPLAZA \ CON VARIABLE
                */
                ?>




            <?php
            }
            ?>







        </div>
    </div>


</body>

</html>