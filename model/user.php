<?php
require_once "model.php";

class user extends model{
	public function getAll(){
		$query=$this->db->query("select * from users");
		$query->execute();
		return $query->fetchAll();
	}
} 
?>