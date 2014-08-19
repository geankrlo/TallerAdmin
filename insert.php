<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["usuario"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("UsuarioCollector.php");

$UsuarioCollectorObj = new UsuarioCollector();
$UsuarioCollectorObj->createDemo($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
