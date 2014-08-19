<html>
<head>
</head>

<body>
<div id="main">
<?php
$usuario=$_POST["usuario"];
$idUsuario=$_POST["idUsuario"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->updateDemo($idUsuario,$usuario);

echo "idUsuario :".$idUsuario." actualizado a:".$usuario." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
