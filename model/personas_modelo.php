<?php

  /* 
  * personas_modelo
  * Description: Read del CRUD.
  * Version: 1.0
  * Author: 2021 - Pablo Garay
  * https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
  */

	class Personas_modelo{

		private $db;
		private $personas;


		public function __construct(){

			require_once("model/conexion.php");

			$this->db=Conectar::conexion();

			$this->personas=array();

		}

		public function getPersonas(){

			require_once("paginacion.php");

			$consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $reg_por_pag");

			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
 
				$this->personas[]=$filas;

			}

			return $this->personas;

		}


	}

?>