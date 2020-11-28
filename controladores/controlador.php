<?php

class MvcController{

    public function sesion(){
        include"logging/main.php";
    }
    
    public function plantilla(){
        include "../vistas/plantilla.php";
    }

    #interaccion del usuario
#--------------------------------------------------------------------------------------
    public function enlacesPaginasController(){
        if(isset($_GET["action"])){

            $enlace=$_GET["action"];

        }

        else
        {
            $enlace="index";
        }

        $respuesta= EnlacesPaginas::enlacesPaginasModel($enlace);

        include $respuesta;

    }

#--------------------------------------------------------------------------------------
}



?>