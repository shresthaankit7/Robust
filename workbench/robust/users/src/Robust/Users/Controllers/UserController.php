<?php

namespace Robust\Users\Controllers;

use Robust\Users\Repositories\UserRepository;

class UserController extends \BaseController

{
	public function __construct(UserRepository $userRepository)

	{
		$this->userRepository = $userRepository;
	}
	
	public function addUser()

	{
		return $this->userRepository->add();
	}
}