<?php

use \Robust\Events\Repositories\EventRepository as EventRepository;
use \Robust\Events\Models\Event as Event;
use \Robust\Users\Repositories\UserRepository as UserRepository;
use \Robust\Users\Models\User as User;

use \Robust\Users\Controllers\UserController as UserController;
use \Robust\Events\Controllers\EventController as EventController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return "Welcome to ROBUST";
});
Route::get('/myclass',array('uses'=>'MyclassController@test'));
Route::get('/myclass2',array('uses'=>'Myclass2Controller@test'));
Route::get('/createMyClass2',function(){
	$b = new MyClass2("TEST");
	return $b->getName();
});
/* Look at the class created by use of namespaces */
Route::get('/student',function(){
	$a = new \libraryClasses\Student("ANKIT",68007);
	return $a->test();
});
/* Direct get the class by use of namespaces */
Route::get('/packagetest', function(){
  echo \Ankit\Userpackage\Userpackage::greeting();
});
Route::get('/callclass',function(){
	$a = new MyClass();
	return $a->getStatus();
});
/* Model manipulation test */
Route::get('/getEvents',function(){
	$events = User::find(1)->events;
	return $events;
});

//Route::post('signup',array('uses'=>'UserController@create'));


/* Task */


/* My homepage */
Route::get('homepage',function(){
	return View::make('homepage');
});

/* Add an event */
Route::get('addevent',function(){
	return View::make('addevent');
});
Route::post('addevent','\Robust\Events\Controllers\EventController@add');


/* New user creation */
Route::get('newUser',function(){
	return View::make('UserRegistration');
});
Route::post('newUser',['uses'=>'\Robust\Users\Controllers\UserController@addUser']);
\Event::listen('send.email','\LibraryClass\SendMail');


/* List the events */
Route::get('listevents',['uses'=>'\Robust\Events\Controllers\EventController@show']);

/* Delete Event */
Route::delete('events/{id}',['uses'=>'\Robust\Events\Controllers\EventController@destroy']);

/* Edit Event */
Route::get('events/{id}/edit',['uses'=>'\Robust\Events\Controllers\EventController@edit']);
