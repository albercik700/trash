<?php
require_once "controller.php";

class userCtrl extends controller{
	public function index(){
		$model=$this->getModel("user");
		$users=$model->getAll();
		$view=$this->getView("user");
		$view->setVar("users",$users);
		$view->loadTempl("users.showAll");
	}
}
?>