<!DOCTYPE html>
	

<html >
  <head>
   
   
  </head>

  <body>

<?php
include ("../Header.php");
?>

<div class="list-group">
  <a class="list-group-item" href="/vista/blog.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Blog</a>
  <a class="list-group-item" href="/vista/registro.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Registro</a>
  <a class="list-group-item" href="/vista/wiki.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; wiki </a>
  <a class="list-group-item" href="vista/tickets.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Tickets</a>

    <div class="form">
      
       <!-- FORMULARIO REGISTRARSE -->
           <form action="" method="post" align="center" >
          <h1>TICKETS</h1>
		      <table>
         <!-- <div> -->
		  
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Categoría">
            </div>
			   <p></p> 
       <!--   </div> -->
  <!-- <div> -->
     
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Plataforma">
            </div>
			    <p></p> 
       <!--   </div> -->
<!-- <div> -->
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Arreglado en versión">
            </div>
			<p></p> 
       <!--   </div> -->
	   <!-- <div> -->
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Versión de destino">
            </div>
			<p></p> 
       <!--   </div> -->
            <!--   </div> -->
			
			<!-- <div> -->
			 <div class="field-wrap">
             <select id="gravedad" name="gravedad" class="{required:true} span3">
			 <option value="" disabled selected>Gravedad</option>
								<option  value="Activo">Alta</option>
								<option  value="Activo">Media</option>
								<option  value="Activo">Baja</option>        	
			</select>
          </div>
		  <p></p> 
		 <!--   </div> --> 	
		 
			<!-- <div> -->
			 <div class="field-wrap">
             <select id="estado" name="estado" class="{required:true} span3">
			 <option value="" disabled selected>Estado</option>
						<option value="01">Activo</option>
						<option value="02">Aplazado</option>	        	
			</select>
          </div>
		  <p></p> 
		 <!--   </div> --> 	 
		 
		<!-- <div> -->
			 <div class="field-wrap">
             <select id="usr_status" name="usr_status" class="{required:true} span3">
						 <option value="" disabled selected>SO</option>
						<option value="03">Windows</option>
						<option value="04">Mac OS</option>
						<option value="05">Linux</option>
						<option value="06">AmigaOS</option>
						<option value="07">Unix</option>
						<option value="08">Symbian</option>
						<option value="09">Android</option>
						<option value="10">iOS</option>
						<option value="11">Windows Mobile</option>
						<option value="12">BlackBerry OS</option>
						<option value="13">Palm OS </option>
</select>
          </div>
		  <p></p> 
		 <!--   </div> -->
		 
		 <!-- <div> -->
			 <div class="field-wrap">
            <label> Privado:</label>
             <select id="privado" name="privado" class="{required:true} span3">
						<option value="14">Si</option>
						<option value="15">No</option>	        	
			</select>
          </div>
		  <p></p> 
		 <!--   </div> --> 	
		 <!-- <div> -->
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Versión">
            </div>
			<p></p> 
       <!--   </div> -->
	   	
			 <!-- <div> -->
            <div class="field-wrap">
             <input type="text" class="form-control" placeholder="Creador">
            </div>
			<p></p> 
       <!--   </div> -->

<!-- <div> --> 
<textarea placeholder="Escriba aquí sus comentarios..." rows="10" cols="80" ></textarea>
      <!--   </div> -->
	  <p></p> 
	  </table>
	   <input type="submit" class="button button-block" name="submit" value="Completar"/>     
          </form>
    

    <?php
include("../Footer.php");

?>
  </body>
</html>