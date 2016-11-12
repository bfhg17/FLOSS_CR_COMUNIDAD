<?php
    include "../bd/bd.php";
    $base;
    $this->base=new Bd();
        
    function agregarUsuario($nombre,$apellido,$nick,$clave,$acerca,$foto){
        $this->base->conectar();
        $resultado=$this->base->sentencia("insert into usuarios (nombre,apellido,nick,clave,acerca,foto) values('".$nombre."','".$apellido."','".$nick."','".$clave."','".$acerca."','".$foto."')");
        $this->base->cerrar();
        return $resultado;
    }
    
    
?>