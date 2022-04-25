<?php

	/* 
	* conexion
	* Description: Conexion a BBDD.
	* Version: 1.0
	* Author: 2021 - Pablo Garay
	* https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
	*/
	
	class Conectar{

		public static function conexion(){

			require_once("config.php");

			try{

				$conexion = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."; charset=".DB_CHARSET."", DB_USUARIO, DB_CONTRA);
				
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			}catch(Exception $e){

				die("Error" . $e->getMessage());

				echo "L&iacute;nea del error " . $e->getLine();
				
			}

			return $conexion;
		
		}
	}
?>