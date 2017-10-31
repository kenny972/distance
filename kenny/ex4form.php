<?php
class form
{
	private $data;
	public $surround = 'p';	

	public function __construct($data = array()){	//création de notre constructeur qui prend en paramètres $data
		$this->data = $data;// j'envoie le tout vers l'instance ex4.php
	}

	private function surround(html){
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

	private function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	public function input($name){
		return $this->surround('<input type="text" name=""' . $name . '">');
	}	

	public function submit(){
		return $this->surround('<button type="submit">Submit</button>');
	}


}









?>