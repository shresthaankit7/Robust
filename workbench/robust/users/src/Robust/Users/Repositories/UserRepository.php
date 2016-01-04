<?php

namespace Robust\Users\Repositories;

use Robust\Users\Models\User;
use LibraryInterface\AddDeleteInterface;


class UserRepository implements AddDeleteInterface

{

	public function __construct(User $user)

	{	
		$this->user = $user;
	}

	public function add()

	{
		$data = array('name'=> \Input::get('name'),'email'=> \Input::get('email'));

		/* DB actions here */
		/* on success */
		$response =  \Event::fire('send.email',array('data'=>$data));

		return \Redirect::to('/homepage')->with('message','Successfully User Added!!!!');
	}

	public function delete($id)
	
	{

	}

}