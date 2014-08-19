<?php

class usuario
{
    private $idUsuario;
    private $usuario;    
    private $password;
    
     function __construct($idUsuario, $usuario, $password) {
       $this->idUsuario = $idUsuario;
       $this->usuario = $usuario;       
       $this->password = $password;
     }
    
     function setId($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getId(){
       return $this->idUsuario;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     }  
     function setPassword($password){
       $this->password = $password;
     } 
     function getPassword(){
       return $this->password;
     } 
}

?> 
