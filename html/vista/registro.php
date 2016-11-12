<?php
 include '../logica/l_registro.php';
    $status = "";
if ($_GET["action"] == "c")
{
    // agregar la foto al servidor
    $tamano = $_FILES["foto"]['size']; /*nombre del input, obtener tamaño*/
    $tipo = $_FILES["foto"]['type']; /*nombre del input, obtener el tipo de archivo*/
    $archivo = $_FILES["foto"]['name']; /*nombre del input, obtener el nombre del archivo*/
    
    if ($archivo != "")  /*Si el archivo */
    {
        // guardamos el archivo a la carpeta ficheros
        $destino =  "/var/www/html/".$archivo;
        if (copy($_FILES['foto']['tmp_name'],$destino)) 
        {
            $status = "Archivo subido";
        } 
        else 
        {
            $status = "Error al subir el archivo";
        }
        echo $status;
        agregarUsuario($_POST["nombre"],$_POST["apellido"],$_POST["nick"],$_POST["clave"],$_POST["acerca"],$_POST["foto"]);
    }
    // fin agregar foto    
}
    
?>

<?php
include ("../Header.php");
?>

<script type="text/javascript">
    function validarCampos(){
        
        var estado=true;
        if(document.getElementById("nombre").value===""){
            estado=false;
        }
        if(document.getElementById("apellido").value===""){
            estado=false;
        }
        if(document.getElementById("nick").value===""){
            estado=false;
        }
        if(document.getElementById("clave1").value===""){
            estado=false;
        }
        if(document.getElementById("clave1").value !== document.getElementById("clave2").value ){
            estado=false;
        }
        if(document.getElementById("acerca").value===""){
            estado=false;
        }
        if(document.getElementById("foto").value===""){
            estado=false;
        }
        
        if(estado){
            document.getElementById("formRegistro").submit();
        }
    }
</script>

<div class="container">
    
    
    <form action="registro.php?action=c" method="post" enctype="multipart/form-data" id="formRegistro">
    <!--Titulo-->
    <div class="col-md-offset-3 col-md-6" >
        <h3>Registro de Usuario</h3>
    </div>
    <!--Mensaje de datos requeridos-->
    <div class="col-md-6">
        <label id="advertencia" style="display: none;">Debe ingresar los datos requeridos (*)</label>
        <br/>
    </div>
    <!--Nombre-->
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <!--Apellidos-->
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <!--Nick-->
    <div class="form-group">
        <label for="nick">Nick:</label>
        <input type="text" class="form-control" id="nick" name="nick">
    </div>
    <!--Clave-->
    <div class="form-group">
        <label for="clave1">Clave:</label>
        <input type="password" class="form-control" id="clave1" name="clave">
    </div>
    <!--Clave confirmar-->
    <div class="form-group">
        <label for="clave2">Confirmar clave:</label>
        <input type="password" class="form-control" id="clave2">
    </div>
    <!--Acerca de-->
    <div class="form-group">
        <label for="acerca">Acerca:</label>
        <input type="text" class="form-control" id="acerca" name="acerca">
    </div>
    <!--Foto perfil-->
    <div class="form-group">
        <label for="pwd">Foto de perfil:</label>
        <input type="file" class="form-control" id="pwd" name="foto">
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
    
    <form>
</div>
<?php
    include("../Footer.php");
?>