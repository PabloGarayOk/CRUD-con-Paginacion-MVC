## Bienvenido al repositorio de Pablo Garay.

####Para crear la BBDD.

Para construir este CRUD con MVC primero debemos crear nuestra BBDD dentro de la tabla &quot;pruebas&quot;, con el comando que se encuntra en el archivo &quot;create data base.sql&quot;.

    CREATE TABLE pruebas.datos_usuarios ( Id INT NOT NULL AUTO_INCREMENT , Nombre VARCHAR(30) NOT NULL , Apellido VARCHAR(30) NOT NULL , Direccion VARCHAR(50) NOT NULL , PRIMARY KEY (Id)) ENGINE = InnoDB;

####Para cambiar la cantidad de registros que se muestran por pagina.

1 - Ir al archivo &quot;model/paginacion.php&quot;
2 - Ubicarse en la linea 9 y modificar el valor la variable &quot;$reg_por_pag&quot; por el valor deseado, y guardar el archivo.

    <?php
			$reg_por_pag = 2;
    ?>

####Para ver el CRUD online.

[Ver CRUD online](https://pablogaray.com.ar/portfolio/crud_con_paginacion_mvc/)

[Visita mi sitio web](https://pablogaray.com.ar)

###Fin.