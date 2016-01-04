<?php

namespace Robust\Events\Repositories;

use Robust\Events\Models\Event;
use LibraryInterface\AddDeleteInterface;
use LibraryInterface\AddDeleteEditInterface;

use DB;
use Carbon\Carbon as Carbon;

class EventRepository implements AddDeleteEditInterface

{

	public function __construct(Event $event)

	{
		$this->event = $event;
	}

	public function add()

	{
		if( (\Input::has('event')) && (\Input::has('description'))  )

		{
		/* suppose user_id = 1 always creates events */
			$newEvent = $this->event;
			$newEvent->user_id = 1;
			$newEvent->event = \Input::get('event');
			$newEvent->description = \Input::get('description');
			$newEvent->save();
			return true;
		}

		else

		{
			return false;
		}
	}

	public function delete($id)

	{

		$current = Carbon::now();
		
		return DB::table('events')->where('id',$id)->update(array('deleted_at'=>$current));
	}

	public function edit($id)

	{
		$event = DB::table('events')->where('id',$id)->get();

		return \View::make('addevent')->with('events',$event);
		
	}

	public function getAll()

	{

		return DB::table('events')->whereNull('deleted_at')->get();
	
	}

}