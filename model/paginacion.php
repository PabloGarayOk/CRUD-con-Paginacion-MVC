<?php
  
  /* 
  * paginacion
  * Description: Paginacion del CRUD.
  * Version: 1.0
  * Author: 2021 - Pablo Garay
  * https://github.com/PabloGarayOk/CRUD-con-Paginacion-MVC.git
  */

  require_once("conexion.php");

  $base = Conectar::conexion();
  

    $reg_por_pag = 2; 

    if (isset($_GET['pag_selec'])) {
          
      if ($_GET['pag_selec']==1) {
        
        header("location:index.php");

      }else{

        $pag_actual=$_GET['pag_selec'];

      }

    }else{

      $pag_actual = 1;

    }


    $sql_total="SELECT * FROM datos_usuarios";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());

    $num_filas=$resultado->rowCount();

    $num_paginas=ceil($num_filas/$reg_por_pag);

    $empezar_desde=($pag_actual-1) * $reg_por_pag;

?>