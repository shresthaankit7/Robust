<?php

namespace LibraryClass;

class SendMail

{
	public function handle($data)

	{	
		$email = $data['email'];
		
		$userName = $data['name'];
		
		\Mail::send('emails.Welcome',array('userName'=>$userName),function($message){
			$message->to(\Input::get('email'),"Ankit Shrestha")->subject('Registration In Task');
		});
	
	}
}