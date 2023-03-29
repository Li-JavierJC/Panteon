public $<?php
/*
Nomre del Programa: Tumba
Descripcion:Creacion de la clase Tumba, incluyento atributos, metodo constructor, descriptores de acceso y metodo mostrar
Autor: Javier Juarez Carrera
Fecha de Crecion: 31 de Enero del 2019
Fecha de Modificacion:9 de Febrero del 2019
*/
class Tumba{
	//Declaracion de los atributos de la clase Tumba
	public $id_tumba;
	public $colind_poniente;
	public $colind_norte;
	public $colind_sur,
	public $colind_oriente;

	// Metodo costructor de la clase Tumba
	public function __construct(){
		$id_tumba=0;
		$colind_poniente="";
		$colind_norte="";
		$colind_sur="";
		$colind_oriente="";
	}

	//---------------------------------------------------
	//Metodo set del atributo id_tumba
	public function setId_tumba($id_tumba){
		$id_tumba=$id_tumba;
	}
	// Metodo get del atributo colind_poniente
	public function getId_tumba(){
		return $id_tumba;
	}

	//----------------------------------------------------
	//Metodo set del atributo colind_poniente
	public function setColind_poniente($colind_poniente){
		$colind_poniente=$colind_poniente;
	}
	//Metodo get del atributo colind_poniente
	public function getColinf_poniente(){
		return $colind_poniente;
	}


	//---------------------------------------------------
	//Metodo set del atributo  colind_norte
	public function setColind_norte($colind_norte){
		$colind_norte=$colind_norte;
	}
	//Metodo get del atributo colind_norte
	public function getColind_norte(){
		return $colind_norte;
	}


	//----------------------------------------------------
	//Metodo set del atributo colind_sur
	public function setColind_sur($colind_sur){
		$colind_sur=$colind_sur;
	}
	//Metodo get del atributo colind_su
	public function getColind_sur(){
		return $colind_sur;
	}


	//----------------------------------------------------
	//Metodo set del atributo colind_oriente
	public function setColind_oriente($colind_oriente){
		$colind_oriente=$colind_oriente;
	}
	//Metodo get del atributo colind_oriente
	public function getColind_oriente(){
		return $colind_oriente;
	}


	//----------------------------------------------------
	//Metodo para mostrar de la clase Tumba
	public function mostrar(){

		echo $id_tumba ;
		echo $colind_poniente ;
		echo $colind_norte ;
		echo $colind_sur ;
		echo $setColind_oriente ;
	}

}
?>