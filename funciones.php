<?php
function verificarSesion()
{
    return isset($_SESSION['usuario']); //funcion devuelve true o false
}

function cerrarSesion()
{
    session_destroy();
}

function alertaError($mensaje)
{
    echo '<section>
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
                        <strong class="font__weight-semibold">Error</strong>' . $mensaje . '
                    </div>
                </div>
            </div>
        </div>
    </section>';
}

function alertaExito($mensaje)
{
    echo '<section>
            <div class="square_box box_three"></div>
            <div class="square_box box_four"></div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                            <button type="button" class="close font__size-18" data-dismiss="alert">
                                <span aria-hidden="true"><a>
                                        <i class="fa fa-times greencross"></i>
                                    </a></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <i class="start-icon far fa-check-circle faa-tada animated"></i>
                            <strong class="font__weight-semibold">Bien hecho!</strong>'. $mensaje .'
                        </div>
                    </div>
                </div>
        </section>';

}


