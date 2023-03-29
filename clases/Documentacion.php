<?php
/*
Nomre del Programa: Documentacion
Descripcion:Creacion de la clase Documento, incluyento atributos, metodo constructor, descriptores de acceso y metodo mostrar
Autor: Javier Juarez Carrera
Fecha de Crecion: 31 de Enero del 2019
Fecha de Modificacion:9 de Febrero del 2019
*/
	class Documentacion{
		//Declaracio de atributos de la clase documentacion 
		public $id_documentacion;
		public $doc_perpetuidad;
		public $exp_fisico;
		public $observaciones;

	//Metdo constructor de documentacion
	public function __construct(){
		$id_documentacion=0:
		$doc_perpetuidad="";
		$exp_fisico="";
		$observaciones="";
	}

	//--------------------------------------------------------
	//Metodo set del atributo id_documentacion
	public function setId_documentacion($id_documentacion){
		$id_documentacion=$id_documentacion;
	}
	public function getId_documentacion(){
		return $id_documentacion;
	}

	//--------------------------------------------------------
	//Metodo set del atributo doc_perpetuidad
 	public function setDoc_perpetuidad($doc_perpetuidad){
		$doc_perpetuidad=$doc_perpetuidad;
	}
	//Metodo get del atributo doc_perpetuidad
	public function getDoc_perpetuidad(){
		return $doc_perpetuidad;
	}

	//------------------------------------------------------
	//Metodo set del atributo exp_fisico
	public function setExp_fisico($exp_fisico){
		$exp_fisico=$exp_fisico;
	}
	//Metodo get del atribuito exp_fisico
	public function getExp_fisico(){
		return $exp_fisico;
	}

	//----------------------------------------------------
	//Metodo set del atributo observaciones
	public function setObservaciones($observaciones){
		$observaciones=$observaciones;
	}
	//Metodo get del atributo observaciones
	public function getObservaciones(){
		return $observaciones;
	}


	//--------------------------------------------------
	//Metodo de mostrar de la clase Documentacion
	public function mostrar(){
		echo $id_documentacion;
		echo $doc_perpetuidad;
		echo $exp_fisico ;
		echo $observaciones;
	}

}
?>