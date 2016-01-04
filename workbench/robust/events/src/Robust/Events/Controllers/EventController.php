<?php

namespace Robust\Events\Controllers;

use Robust\Events\Repositories\EventRepository;

class EventController extends \Controller

{

	public function __construct(EventRepository $eventRepository)

	{
		$this->eventRepository = $eventRepository;
	}

	public function add()

	{
		if( $this->eventRepository->add() )

		{
			return \Redirect::to('/homepage')->with('message','Successfully Event Added');
		}

		else
		
		{
			return \Redirect::to('/homepage')->with('message','Error In Adding Event');
		}
	}

	public function show()

	{
		$events = $this->eventRepository->getAll();
		return \View::make('listevents')->with('events',$events);
	}

	public function destroy($id)

	{	
		if( $this->eventRepository->delete($id) )

		{
			return \Redirect::to('/listevents')->with('message',"Event Successfully Deleted");
		}

		else

		{
			return \Redirect::to('/listevents')->with('message',"Error IN DELETE EVENT");
		}
	}

	public function edit($id)

	{
		return $this->eventRepository->edit($id);
	}
}