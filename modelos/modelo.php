<?php
class EnlacesPaginas{
    public function enlacesPaginasModel($enlaces){

        if( $enlaces=="nosotros"||
            $enlaces=="perfil"||
            $enlaces=="formularios"|| //OPCION DE PERFIL
            $enlaces=="actualizar"||//OPCION DE PERFIL
            $enlaces=="post"||//OPCION DE PERFIL
            $enlaces=="articulos"){

            $modulo="vistas/modulos/".$enlaces.".php";
        
        }
        else if($enlaces=="salir")
        {
            $modulo="vistas/modulos/inicio.php";//redirigir a pantalla de log-in
            echo"sesion cerrada";
            //destruir sessiones aqui
        }
        else if($enlaces=="index"){

            $modulo="vistas/modulos/inicio.php";

        }
        else{

            $modulo="vistas/modulos/inicio.php";
        }







        return $modulo;
    }
}




?>