<?php

  /* 
  * personas_crear_modelo
  * Description: Create del CRUD.
  * Version: 1.0
  * Author: 2021 - Pablo Garay
  * https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
  */

      if (isset($_POST['create'])){

            if(($_POST['Nom']=="")||($_POST['Ape']=="")||($_POST['Dir']=="")){

                  header("location:index.php");

                  exit;

            }else{

                  $nombre = $_POST['Nom'];

                  $apellido = $_POST['Ape'];

                  $direccion = $_POST['Dir'];

                  $sql = "INSERT INTO datos_usuarios (NOMBRE, APELLIDO, DIRECCION) VALUES (:nom, :ape, :dir)";

                  $resultado=$base->prepare($sql);

                  $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

                  header("location:index.php");

            }            

      }

?>