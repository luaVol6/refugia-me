<?php

class Usuario{
	private $nome;
	private $email;
	private $dataNasc;
	private $senha;
	
	public function __set($atributo, $valor){

		$this->$atributo =$valor;		
	}
	
	public function __get($atributo){
		
		return $this->$atributo;
	}
	
	
}



?>