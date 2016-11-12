
<?php

	
	$categoria=$_POST['categoria'];
	$plataforma=$_POST['plataforma'];
	$creacion=$_POST['creacion'];
	$actualizacion=$_POST['actualizacion'];
	$gravedad=$_POST['gravedad'];
	$estado=$_POST['estado'];
	$sistemaOperativo=$_POST['sistemaOperativo'];
	$privacidad=$_POST['privacidad'];
	$version=$_POST['version'];
	$creador=$_POST['creador'];
	$sistemaOperativo=$_POST['comentarios'];



	require("conf.php");
	
		mysqli_query($mysqli,"INSERT INTO tickets VALUES('$categoria','$plataforma','$creacion','$actualizacion', '$gravedad','$estado', '$sistemaOperativo','$privacidad','$version','$creador','$comentarios')");
				
				echo ' <script language="javascript">alert("Tickeys registrados con éxito!");</script> ';
				echo "<script>location.href='tickets.php'</script>";
			



?>