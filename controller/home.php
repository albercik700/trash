<?php
require_once "controller.php";

class homeCtrl extends controller{
	public function index(){
		$view=$this->getView("home");
		$view->setVar("name","uŻyszkodnik007");
		$view->loadTempl("home");
	}
}
?>