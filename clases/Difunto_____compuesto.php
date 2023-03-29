<?php
/*
Nomre del Programa: Difunto
Descripcion:Cracion de la clase Difunto, incluyento atributos, metodo constructor, descriptores de acceso y metodo mostrar
Autor: Javier Juarez Carrera
Fecha de Crecion: 31 de Enero del 2019
Fecha de Modificacion:9 de Febrero del 2019
*/
	class Difunto{

	//Declaracion de los atributos de la clase difunto
	public $id_difunto;
	public $nombre;
	public $ap_paterno;
	public $ap_materno;
	public $fecha_difuncion;
	public $acta_difuncion;

	//Metodo cobstructor de la clase Difunto
	public function __construct(){

		$id_difunto=0;
		$nombre="";
		$ap_paterno="";
		$ap_materno="";
		$fecha_difuncion="";
		$acta_difuncion="";
	}

	//----------------------------------------------
	//Metod set del atributo id:difunto
	 function setId_difunto($id_difunto){
		$id_difunto=$id_difunto;
	}
	//Metodo get del atribuo de id_difunto
	public function getId_difunto(){
		return $id_difunto;
	}


	//---------------------------------------------------
	//Metodo set del atributo nombre
	public function setNombre($nombre){
		$nombre=$nombre;
	}
	//Metodo get del atributo nombre
	public function getNombre(){
		return $nombre;
	}


	//----------------------------------------------------
	//Metodo set del atributo ap_paterno
	public function setAp_paterno($ap_paterno){
		$ap_paterno=$ap_paterno;
	}
	//Metodo get del atributo ap_materno
	public function getAp_paterno(){
		return $ap_paterno;
	}


	//----------------------------------------------------
	//Metodo set del atributo ap_materno
	public function setAp_materno($ap_materno){
		$ap_materno=$ap_materno;
	} 
	//Metodo get del atributo ap_materno
	public function getAp_materno(){
		return $ap_materno;
	}


	//----------------------------------------------------
	//Metodo set del atributo fecha_difuncion
	public function setFecha_difuncion($fecha_difuncion){
		$fecha_difuncion=$fecha_difuncion;
	}
	//Metoddo get del atributo fecha_difuncion
	public function getFecha_difuncion(){
		return $fecha_difuncion=$fecha_difuncion;
	}


	//---------------------------------------------------
	//Metodo set del atributo acta_difuncion
	public function setActa_difuncion($acta_difuncion){
		$acta_difuncion=$acta_difuncion;
	}
	//Metodo get del atributo acta_difuncion
	public function getActa_difucion(){
		return $acta_difuncion;
	}

	//--------------------------------------------------
	//Metodo mostrar de la clase Difunto
	public function mostrar(){
		echo $id_difunto;
		echo $nombre;
		echo $ap_paterno;
		echo $ap_materno;
		echo $fecha_difuncion;
		echo $acta_difuncion;
	}

	}
?>