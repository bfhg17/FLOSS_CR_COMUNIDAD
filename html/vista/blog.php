<?php
extract($_GET);
//include "../logica/logicaBlog.php";


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
<TITLE>Blog</TITLE>
<body>
</HEAD>
<?php
include("../Header.php");

?>

<div class="list-group">
  <a class="list-group-item" href="/vista/blog.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Blog</a>
  <a class="list-group-item" href="/vista/registro.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Registro</a>
  <a class="list-group-item" href="/vista/wiki.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; wiki </a>
  <a class="list-group-item" href="vista/tickets.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Tickets</a>

<form name="formulario" method="GET" action="blog.php">
  <br>
 <textarea placeholder="Escriba su comentario aquí" name="textarea" rows="10" cols="50" maxlength="1000"></textarea>
 <br>
 <input type="submit"/>
</form>
<?php
echo " Comentarios";

?>
<?php
include("../Footer.php");

?>

<script src="/Contenidos/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

	<script src="/Contenidos/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-fileinput/js/plugins/sortable.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-fileinput/js/plugins/purify.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-fileinput/js/locales/es.js" type="text/javascript" charset="utf-8" async defer></script>

	<script src="/Contenidos/bootstrap-select-1.11.2/js/bootstrap-select.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/Contenidos/bootstrap-select-1.11.2/js/i18n/defaults-es_CL.min.js" type="text/javascript" charset="utf-8" async defer></script>
	</body>
</HTML>
