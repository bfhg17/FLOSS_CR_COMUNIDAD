<?php
    include "../bd/bd.php";
    public $base;
    $this->base=new Bd();
    $this->base->conectar();
    
    function Wiki($id){
        $resultado=$this->base->sentencia("select * from wiki where=".$id);    
    }
    
    $this->base->cerrar();
?>


<HTML>
<HEAD>
<meta charset="UTF-8">
    <link rel="stylesheet" href="/Contenidos/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Contenidos/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Contenidos/master/site.css">
    <link rel="stylesheet" href="/Contenidos/bootstrap-fileinput/css/fileinput.min.css">
    <link rel="stylesheet" href="/Contenidos/bootstrap-select-1.11.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/Contenidos/DataTables-1.10.12/css/jquery.dataTables.min.css">
<TITLE>wiki</TITLE>
<body>
</HEAD>
<body>
<?php
include ("../Header.php");
?>
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
</HTML>