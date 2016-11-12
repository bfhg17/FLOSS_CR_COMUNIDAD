<?php
include("../Header.php");
?>

<div class="list-group">
  <a class="list-group-item" href="/vista/blog.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Blog</a>
  <a class="list-group-item" href="/vista/registro.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Registro</a>
  <a class="list-group-item" href="/vista/wiki.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; wiki </a>
  <a class="list-group-item" href="vista/tickets.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Tickets</a>
  
<div class="col-md-offset-2 col-md-10"> </div>
					<form>
				  <div class="col-md-12 form-group">
				    <label class="col-md-offset-2 col-md-1" for="input_nombre">Nombre</label>
				    <input class="col-md-offset-1 col-md-4" type="text" class="form-control" id="tx_nombre" placeholder="">
				  </div>
				  <div class="col-md-12 form-group">
				    <label class="col-md-offset-2 col-md-1" for="input_apellido">Apellido</label>
				    <input class="col-md-offset-1 col-md-4" type="text" id="tx_apellido" placeholder="">
				    <p class="help-block"></p>
				  </div>
				  <div class="col-md-12 form-group">
				    <label class="col-md-offset-2 col-md-1" for="input_Nick">Apodo</label>
				    <input class="col-md-offset-1 col-md-4" type="text" id="tx_apodo" placeholder="">
				    <p class="help-block"></p>
				  </div>
				  <div class="col-md-12 form-group">
				    <label class="col-md-offset-2 col-md-1" for="input_contrasena">Password</label>
				    <input class="col-md-offset-1 col-md-4" type="password" class="form-control" id="tx_contraseña" placeholder="">
				  </div>
				  <div class="col-md-12 form-group">
				    <label class="col-md-offset-2 col-md-1" for="input_conf_cont">Confirmar Contraseña</label>
				    <input class="col-md-offset-1 col-md-4" type="password" class="form-control" id="tx_conf_cont" placeholder="Ingrese de nuevo su contraseña">
				  </div>

					<div class="col-md-12">
					<label class="col-md-offset-2" control-label">Select File</label>
					<input class="col-md-offset-2" id="input-1" type="file" class="file">
					</div>

					<div class="col-md-12"><br /></div>
					    <div class="col-md-12">
					    	<table id="example2" class="display" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Name</th>
					                <th>Position</th>
					                <th>Office</th>
					                <th>Age</th>
					                <th>Start date</th>
					                <th>Salary</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Name</th>
					                <th>Position</th>
					                <th>Office</th>
					                <th>Age</th>
					                <th>Start date</th>
					                <th>Salary</th>
					            </tr>
					        </tfoot>
					        <tbody>
					            <tr>
					                <td>Tiger Nixon</td>
					                <td>System Architect</td>
					                <td>Edinburgh</td>
					                <td>61</td>
					                <td>2011/04/25</td>
					                <td>$320,800</td>
					            </tr>
					            <tr>
					                <td>Garrett Winters</td>
					                <td>Accountant</td>
					                <td>Tokyo</td>
					                <td>63</td>
					                <td>2011/07/25</td>
					                <td>$170,750</td>
					            </tr>
					            </tbody>
					    </table>
					    </div>
						<hr>
						<hr>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>


<?php
include("../Footer.php");
?>
