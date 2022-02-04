<?php
  
  /* 
  * personas_borrar_modelo
  * Description: Delete del CRUD.
  * Version: 1.0
  * Author: 2021 - Pablo Garay
  * https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
  */
	
	require_once("conexion.php");

	$base = Conectar::conexion();


	$id = htmlentities(addslashes($_GET['Id']));

	$sql_borrar = "DELETE from datos_usuarios WHERE Id= :miId"; 

	$resultado=$base->prepare($sql_borrar); 

	$resultado->execute(array(":miId"=>$id));

	header("location:index.php");


?>