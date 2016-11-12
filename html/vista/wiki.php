<!DOCTYPE html>
    

<html >
  <head>
   
   
  </head>

  <body>
  <?php
include ("../Header.php");
?>

<!--
<?php
    include "../bd/bd.php";
    public $base;
    $this->base=new Bd();
    function Wiki($id){
        $this->base->conectar();
        $resultado=$this->base->sentencia("select * from wiki where=".$id);    
        $this->base->cerrar();
        return $resultado;
    }
?>
-->

<div>

    <h1>
        Wiki
    </h1>
    <form>
        <div class="form-group">
            <label for="Version"> Version </label>
            <imput  type="text" class="form-control" id="version" placeholder="Version">
        </div>
        <div class="form-group">
            <label for="Descripcion"> Descripcion </label>
            <imput  type="textarea" class="form-control" id="descripcion" placeholder="Descripcion">
        </div>
    </form>
</div>

    <?php
include("../Footer.php");
?>

 </body>
  </html>
