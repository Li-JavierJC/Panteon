<?php
/*
Nomre del Programa: Seccion
Descripcion:Creacion de la clase Seccion, incluyento atributos, metodo constructor, descriptores de acceso y metodo mostrar
Autor: Javier Juarez Carrera
Fecha de Crecion: 31 de Enero del 2019
Fecha de Modificacion:9 de Febrero del 2019
*/
class Seccion{

	//Declaracion de atributos de la clase Seccion
	public $id_seccion;
	public $nombre;
	//metdo constructor de la clase seccion
	public function __construct(){
		$id_seccion=0;
		$nombre="";
	}


	//-------------------------------------------------
	//Metodo set del atributo set id_seccion
	public function setId_seccion($id_seccion){
		$id_seccion=$id_seccion;
	}
	//Metdo get del atributo id_seccion
	public function getId_secciion(){
		return $id_seccion;
	}

	//-------------------------------------------------
	//Metodo set del atributo nombre
	public function setNombre($nombre){
		$nombre=$nombre;
	}
	//Metdo get del atributo nombre
	public function getNombre(){
		return $nombre;
	}

	//--------------------------------------------
	//metodo mostrar del la clase Seccion
	public function mostrar(){
		echo $id_seccion;
		echo $nombre;
	}
}
?>