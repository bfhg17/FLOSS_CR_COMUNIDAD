<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Contenidos/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Contenidos/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Contenidos/master/site.css">
	<link rel="stylesheet" href="/Contenidos/bootstrap-fileinput/css/fileinput.min.css">
	<link rel="stylesheet" href="/Contenidos/bootstrap-select-1.11.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="/Contenidos/DataTables-1.10.12/css/jquery.dataTables.min.css">
	<title></title>
</head>
<body>
<div class="container frame">
				
					<div class="col-md-2">
				        <a><img src="/Contenidos/imagen/logologo.png" class="banner img-responsive" /></a>
				    </div>
					
					<div class="col-md-2"><br /></div>
				
				    <div class="col-md-2">
				
					
					<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
					</div>
				<!-- footer -->	
				<br />
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

<div class="col-md-12">
<label for="Campanna" class="col-md-2 control-label">Campaña</label>
<div class="col-md-10">
<select id="Campanna" name="Campanna" class="selectpicker form-control" data-live-search="true" required>
    <option value="" disabled selected>Seleccione...</option>
        <option value="bla">bla</option>
        <option value="bla2">bla2</option>
</select>
</div>
</div>
<div class="col-md-12">
<label class="control-label">Select File</label>
<input id="input-1" type="file" class="file">
</div>
	</div>
    <footer>
        <div class="footerComp">
            <div class="container">
                <div class="row">
                    <br />
                    <div class="col-md-4">
                        <div>
                            <h4 class="letrasfooter">Universidad Nacional</h4>
                        </div>
                        <br />
                        <div>
                            <h6 class="letrasfooter">Contexto, Desarrollo y Aplicación de Software Libre y de Código</h6>
                            <br />
                            <h6 class="letrasfooter">Sede Interuniversitaria de Alajuela</h6>
                            <br />
                            <h6 class="letrasfooter">Escuela de Informática</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h4 class="letrasfooter">Información</h4>
                        </div>
                        <br />
                        <div>
                            <h6 class="letrasfooter">Proyecto de Comunidad Libre</h6>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>

    </footer>
					
	<script src="/Contenidos/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="/Contenidos/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-fileinput/js/locales/es.js" type="text/javascript"></script>

	<script src="/Contenidos/bootstrap-select-1.11.2/js/bootstrap-select.min.js" type="text/javascript"></script>
	<script src="/Contenidos/bootstrap-select-1.11.2/js/i18n/defaults-es_CL.min.js" type="text/javascript"></script>

	<script src="/Contenidos/DataTables-1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
    	$('#example2').DataTable();
	});
	</script>
</body>
</html>