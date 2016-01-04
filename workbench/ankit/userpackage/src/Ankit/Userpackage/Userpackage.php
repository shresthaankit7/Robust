<?php

namespace Ankit\Userpackage;

class Userpackage{

	public $greet;

	public function __construct($greeting){
		$this->greet = $greeting;
	}

	public static function greeting(){
		return "Hi from userpackage";
	}

	public function returnGreeting(){
		return $this->greet;
	}
}