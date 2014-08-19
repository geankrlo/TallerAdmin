<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("UsuarioCollector.php");
include_once("Usuario.php");
$UsuarioCollectorObj = new UsuarioCollector();
$ObjDemo = $UsuarioCollectorObj->showDemo($id);
?>
<h2>Editar Objeto Demo </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idUsuario" value="<?php echo $ObjDemo->getId(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="Usuario"  value="<?php echo $ObjDemo->getUsuario(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
