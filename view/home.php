<?php
require_once "view.php";

class homeView extends view{
	public function home(){
		$this->loadTempl("home");
	}	
}
?>