<!DOCTYPE html>
    

<html >
  <head>
   
   
  </head>

  <body>
  <?php
include ("../Header.php");
?>
<div class="col-md-12">

<div class="list-group">
  <a class="list-group-item" href="/vista/blog.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Blog</a>
  <a class="list-group-item" href="/vista/registro.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Registro</a>
  <a class="list-group-item" href="/vista/wiki.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; wiki </a>
  <a class="list-group-item" href="vista/tickets.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Tickets</a>
</div>



<!--<?php
    //include "../bd/bd.php";
    //public $base;
    //$this->base=new Bd();
    //function Wiki($id){
    //    $this->base->conectar();
    //    $resultado=$this->base->sentencia("select * from wiki where=".$id);    
    //    $this->base->cerrar();
    //    return $resultado;
   // }
?>-->


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
