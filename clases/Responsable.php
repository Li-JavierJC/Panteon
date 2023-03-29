<?php
/*
Nomre del Programa: Responsable
Descripcion:Creacion de la clase Responsable, incluyento atributos, metodo constructor, descriptores de acceso y metodo mostrar
Autor: Javier Juarez Carrera
Fecha de Crecion: 31 de Enero del 2019
Fecha de Modificacion:9 de Febrero del 2019
*/
class Responsable{

	//Declaracion de los atributos de la clase Responsable
	public $id_responsable;
	public $nombre;
	public $ap_paterno;
	public $ap_materno;
	public $comp_domicilio;
	public $telefono;

	//Metodo constructor de la clase Responsable
	public function __construct(){

		$id_responsable=0;
		$nombre0"";
		$ap_paterno="";
		$ap_materno="";
		$comp_domicilio="";
		$telefono=0;
	}

	//------------------------------------------------------
	// Metodo set del atributo id_responsable
	public function setId_responsable($id_responsable){
		$id_responsable=$id_responsable;
	}
	//Metodo get del atributo id_responsable
	public function getId_responsable(){
		return $id_responsable;
	}

	//---------------------------------------------------
	//Metodo set del atributo nombre
	public function setNombre($nombre){
		$nombre=$nombre;
	}
	//Metod get del atributo nombre
	public function getNombre(){
		return $nombre;
	}

	//---------------------------------------------------
	//Metodo set del atributo ap_paterno
	public function setAp_paterno($ap_paterno){
		$ap_paterno=$ap_paterno;
	}
	//Metodo get del atributo ap_paterno
	public function getAp_paterno(){
		return $ap_paterno;
	}


	//--------------------------------------------------
	//Metodo set del atributo ap_materno
	public function setAp_materno($ap_maternop){
		$ap_materno=$ap_materno;
	}
	//Metodo get del atributo ap_materno
	public function getAp_materno(){
		return $ap_materno;
	}


	//-----------------------------------------------------
	//Metodo set del atributo comp_domicilio
	public function setComp_domicilio($comp_domicilio){
		$comp_domicilio=$comp_domicilio;
	} 
	//Metodo get del atributo comp_domicilio
	public function getComp_domicilio(){
		return $comp_domicilio;
	}

	//-------------------------------------------------
	//Metodo set del atributo telefono 
	public function setTelefono($telefono){
		$telefono=$telefono;
	}
	//Metodo get del atributo telefono
	public function getTelefono(){
		return $telefono;
	}


	//------------------------------------------------
	//metodo mostrar de la clase Responsable
	public function mostrar(){
		echo $id_responsable;
		echo $nombre;
		echo $ap_paterno;
		echo $ap_materno;
		echo $comp_domicilio;
		echo $telefono;
	}
}
?>