<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idUsuario= ? ", array("{$id}")); 
    $ObjDemo = new usuario($row[0]{'idUsuario'},$row[0]{'usuario'},$row[0]{'password'});
    return $ObjDemo;
  }

  function createDemo($usuario) {    
    $insertrow = self::$db->insertRow("INSERT INTO usuario.usuario (idUsuario, usuario) VALUES (?, ?)", array(null, "{$usuario}"));
  }  

  function readDemos() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new usuario($c{'idUsuario'},$c{'usuario'},$c{'password'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
  
  function updateDemo($id,$usuario) {    
    $insertrow = self::$db->updateRow("UPDATE usuario.usuario SET usuario.usuario = ?  WHERE usuario.idUsuario = ? ", array( "{$usuario}",$id));
  }  

  function deleteDemo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM usuario.usuario WHERE idUsuario= ?", array("{$id}"));
  }  



}
?>

