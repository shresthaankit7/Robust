<?php

namespace Robust\Users\Models;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Robust\Events\Models\Event;

class User extends \Eloquent

{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password','created_at','updated_at');

	public function events()
	
	{
		return $this->hasMany('Robust\Events\Models\Event');
	}

}
