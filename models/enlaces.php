<?php

class Paginas{

	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio" || $enlaces == "lista_proyectos" || $enlaces == "agregar_proyecto"){
			$module =  "include/".$enlaces.".php";

        }else{
            $module =  "include/inicio.php";
        }

		return $module;

	}

}

?>
