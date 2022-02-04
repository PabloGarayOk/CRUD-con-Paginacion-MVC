<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>

		td{
			border: 1px dotted #FF0000;
		}

	</style>
</head>
<body>

	<?php

		require("model/paginacion.php");
		require("model/personas_crear_modelo.php");
		
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	    <table width="50%" border="0" align="center">
	      <tr>
	        <td class="primera_fila">Id</td>
	        <td class="primera_fila">Nombre</td>
	        <td class="primera_fila">Apellido</td>
	        <td class="primera_fila">Dirección</td>
	        <td class="sin">&nbsp;</td>
	        <td class="sin">&nbsp;</td>
	        <td class="sin">&nbsp;</td>
	      </tr>

	      <!--Formulario para insertar registros-->
	      <tr>
	        <td></td>
	        <td><input type='text' name='Nom' size='10' class='centrado'></td>
	        <td><input type='text' name='Ape' size='10' class='centrado'></td>
	        <td><input type='text' name='Dir' size='10' class='centrado'></td>
	        <td class='bot'><input type='submit' name='create' id='create' value='Insertar'></td>
	      </tr> 

	      <!--Vista de registros-->
	      <?php

	        foreach ($matrizPersonas as $personas):
	        
	      ?>		
	     	<tr>
	        <td><?php echo $personas["Id"]?></td>
	        <td><?php echo $personas["Nombre"]?></td>
	        <td><?php echo $personas["Apellido"]?></td>
	        <td><?php echo $personas["Direccion"]?></td>
	        <td class="bot"><a href="?Id=<?php echo $personas["Id"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
	        <td class='bot'><a href="?Pagina='Actualizar' & Id=<?php echo $personas["Id"]?> & Nom=<?php echo $personas["Nombre"]?> & Ape=<?php echo $personas["Apellido"]?> & Dir=<?php echo $personas["Direccion"]?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
	      </tr>

	      <?php

	        endforeach;
	        
	      ?>

	      <!----------------------------------Paginacion----------------------------------->
	      <tr>
	        <td colspan="4">
	          <?php

	            $ant = $pag_actual - 1;
	            $sig = $pag_actual + 1;

	            if ($pag_actual > 1){ //Colocar anterior si la página actual es mayor a 1
	    
	              echo "<a href='?pag_selec=$ant'> Anterior </a>&nbsp;&nbsp;&nbsp;"; // Le pusimos 3 espacios (&nbsp;&nbsp;&nbsp;) para que no quede pegada a los numeros de la pagnacion.

	            }

	            for($i=1; $i<=$num_paginas; $i++){

	              //echo "<a href='?pagina= " . $i . "'>" . $i . "</a>  "; 

	              echo "<a href='?pag_selec=$i'>$i</a>  "; //Esta linea es lo mismo que la de arriba, pero mas simple

	            }

	            if ($pag_actual < $num_paginas) { //Colocar siguiente siempre y cuando la página sea menor a l número total de páginas
	        
	              echo "&nbsp;&nbsp;&nbsp;<a href='?pag_selec=$sig'> Siguiente </a>"; // Le pusimos 3 espacios (&nbsp;&nbsp;&nbsp;) para que no quede pegada a los numeros de la pagnacion.
	                
	            }

	          ?>
	        </td>
	      </tr>
	      <!---------------------------------Fin Paginacion--------------------------------->

	    </table>
	</form>
</body>
</html>