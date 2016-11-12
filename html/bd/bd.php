<?php

class Bd{
private $link;
private $result;

function conectar(){
    require_once "conf.php";
    $this->link = mysqli_connect($host, $usuario, $clave, $bd);
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
}

function cerrar(){
    mysqli_free_result($this->link);
    mysqli_close($this->link);
}

function sentencia($s){
    $this->result = mysqli_query($this->link, $s);
    return $this->result;
}
}
?>