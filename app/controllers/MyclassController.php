<?php

class MyClassController extends BaseController{


	public function test(){
		$a = new MyClass();
		return $a->getStatus();
	}
	
}