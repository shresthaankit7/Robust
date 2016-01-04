<?php


/* check start/global.php
/* added line : app_path().'/classes', to include class MyClass()
*/

class Myclass{

	public $state;

	public function __construct(){
		$this->changeCreated();
	}

	public function changeCreated(){
		$this->state = "true";
	}

	public function getStatus(){
		return $this->state;
	}

}

