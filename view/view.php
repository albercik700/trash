<?php
class view{
	protected $data=array();
	public function loadTempl($template){
		if(file_exists("template/$template.html.php")){
			require_once"template/$template.html.php";
		}else{
			die("brak szablonu $template!");
		}
	}

	public function getVar($name){
		return $this->data[$name];
	}

	public function setVar($name,$val){
		$this->data[$name]=$val;
	}
}
?>