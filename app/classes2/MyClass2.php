<?php


/* Look at the composer.json file
/* added line "autoload": {
		"classmap": [
			"app/classes2"
/* then composer dump-autoload 
/* registers the class 
/* Then can be used 
*/

class MyClass2{
	
	public $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}


}	