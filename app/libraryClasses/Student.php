<?php


/* Look composer.json file */


/* Namespace must be included */


namespace libraryClasses;


//To include the Userpackage Class from the vendor
use \Ankit\Userpackage\Userpackage;  

class Student{
	
	public $name;
	public $roll;

	public function __construct($name,$roll){
		$this->name = $name;
		$this->roll = $roll;
	}

	public function getName(){
		return $this->name; 
	}

	public function test(){
		
		$a = new Userpackage("Hello from Userpackage");
		return $a->returnGreeting();

	}

}