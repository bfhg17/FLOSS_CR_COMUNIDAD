<?php
    include "../bd/bd.php";
    public $base;
    $this->base=new Bd();
    $this->base->conectar();
    
    function ListarComentarios($id){
        $resultado=$this->base->sentencia("select * comentarios where=".$id);    
		return $resultado;
    }
    
    function ElimarUsuarios($id){
        $resultado=$this->base->sentencia("delete from _nombre_tabla where columna=".$id);    
    }
    
	function InsertaComentario($id_comentario,$id_usuario,$id_proyecto,$contenido){
		$resultado=$this->base->sentencia("insert into comentarios(id_comentario,id_usuario,id_proyecto,contenido) values('".$id_comentario."','".$id_usuario."','".$id_proyecto."','".$contenido."')");
	    $this->base->cerrar();
	}
?>