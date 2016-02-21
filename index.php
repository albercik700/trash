<?php
if(isset($_GET['controller']) && $_GET['controller']=='user'){
	if(file_exists('controller/user.php')){
		require_once("controller/user.php");
		if(class_exists("userCtrl")){
			$ctrl=new userCtrl();
			$ctrl->index();
		}else{
			$this->redirect("/");
		}
	}else{
		$this->redirect("/");
	}
}else{
	if(file_exists('controller/home.php')){
		require_once("controller/home.php");
		if(class_exists('homeCtrl')){
			$ctrl=new homeCtrl();
			$ctrl->index();
		}else{
			die("Brak klasy home! w kontrolerze controller/home.php");
		}
	}else{
		die("Brak kontrolera home!");
	}
}
?>