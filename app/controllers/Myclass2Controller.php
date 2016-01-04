<?php

class Myclass2Controller extends BaseController{


	public function test(){
		$a = new MyClass2("Ankit");
		return $a->getName();
	}
	
}