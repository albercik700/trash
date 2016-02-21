<?php
require_once "view.php";

class userView extends view{
	public function showAll(){
		$this->loadTempl("users.showAll");
	}
}
?>