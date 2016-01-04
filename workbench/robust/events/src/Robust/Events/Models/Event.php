<?php

namespace Robust\Events\Models;

use LibraryInterface\AddEditInterface;
use LibraryInterface\AddEditDeleteInterface;
use LibraryInterface\ManageInterface;

use Robust\Users\Models\User;

class Event extends \Eloquent

{

	protected $table = 'events';

	protected $hidden = array('deleted_at','user_id');

	public $timestamps = false;

	public function user()
	
	{
		return $this->belongsTo('User');
	}

}