<?php

	/* 
	* personas_controlador
	* Description: Controlador.
	* Version: 1.0
	* Author: 2021 - Pablo Garay
	* https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
	*/

	if(isset($_GET['Pagina'])){
		
		require_once("model/personas_actualizar_modelo.php");

	}elseif (isset($_GET['Id'])){

		require_once("model/personas_borrar_modelo.php");

	}else{
		
		//Llama al modelo

		require_once("model/personas_modelo.php");

		$personas = new Personas_modelo();

		$matrizPersonas=$personas->getPersonas();

		//Llama a la vista
		
		require_once("view/personas_vista.php");
		
	}

?>