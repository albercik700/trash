<?php
class controller{
	public function redirect($url){
		header("Location: $url");
	}

	public function getView($widok){
		if(file_exists("view/$widok.php")){
			require_once"view/$widok.php";
			$widok=$widok."View";
			if(class_exists($widok)){
				$ob=new $widok();
				return $ob;
			}else{
				die("brak klasy $widok! w widoku view/$widok.php");
			}
		}else{
			die("brak widoku $widok!");
		}
	}

	public function getModel($model){
		if(file_exists("model/$model.php")){
			require_once"model/$model.php";
			if(class_exists($model)){
				$model=new $model();
				return $model;
			}else{
				die("brak klasy $model! w modelu model/$model.php");
			}
		}else{
			die("brak modelu $model!");
		}
	}
}
?>