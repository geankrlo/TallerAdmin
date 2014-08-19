<html>
<head>
</head>
<?php
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($UsuarioCollectorObj->readDemos() as $c){
  echo "<tr>";
  echo "<td>".$c->getId() ."</td>";
  echo "<td>".$c->getUsuario()."</td>";
  echo "<td>".$c->getPassword()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getId()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getId()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
