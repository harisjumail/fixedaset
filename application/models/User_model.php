<?php 
class User_model extends CI_Model{
public $username;
public $password;
//array untuk menyimpan label dari masing masing atribut
public $labels = array();

//konstruktor model
public function __construct(){
	
	parent::__construct();
	
	$this->labels = $this->atribute_labels();
	
}

public function authencticate(){
	if(isset($this->username ==='demo') && isset($this->password === 'demo')){
		return TRUE;
	}
	else {
		return FALSE;
	}
	
}



	
}
	

