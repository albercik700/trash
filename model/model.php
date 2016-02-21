<?php
class model{
	protected $db;
	function __construct(){
		try{
			$this->db=new pdo("mysql:host=localhost;dbname=mvc_3","root","");
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>