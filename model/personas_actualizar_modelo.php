<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD - UPDATE</title>

</head>

<body>

<h1>ACTUALIZAR</h1>

<?php
  
  require_once("conexion.php");

  $base = Conectar::conexion();

  if(!isset($_POST['bot_actualizar'])){

    $id=$_GET['Id'];
    $nom=$_GET['Nom'];
    $ape=$_GET['Ape'];
    $dir=$_GET['Dir'];
  
  }else{

    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $ape=$_POST['ape'];
    $dir=$_POST['dir'];

    $sql="UPDATE datos_usuarios SET Nombre=:miNom, Apellido=:miApe, Direccion=:miDir WHERE Id=:miId";

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":miId"=>$id, ":miNom"=>$nom, "miApe"=>$ape, "miDir"=>$dir));

    header("location:index.php"); 
  }

?>
<form name="form1" method="post" action="">
  <table align="center">
    <tr>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>">
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $ape?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $dir?>"></td>
    </tr>
    <tr>
      <td colspan="2" class="ultima_fila"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" class="boton"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>