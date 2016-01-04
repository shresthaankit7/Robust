<?php

Route::get('/testRepository',function(){
	$a = new \Robust\Users\Models\User();
	$a->username = "test";
	$a->email = 'test@gmail.com';
	$a->password = Hash::make('test');
	$a->save();
	return "saved";
});
