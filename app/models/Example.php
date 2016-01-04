<?php


interface WorkerInterface{
	public function work();
}

interface SleepInterface{
	public function sleep();
}

interface ManagableInterface{
	public function beManage();
}



class Worker implements WorkerInterface,SleepInterface,ManagableInterface{
	public function work(){
		return "WORK";
	}

	public function sleep(){
		return "SLEEP";
	}
	
	public function beManage(){
		$this->work();
	}

}

class android implements WorkerInterface{
	public function work(){
		return "WORK";
	}

	public function beManage(){
		$this->work();
	}
}

class Captain{

	public function manage(ManagableInterface $worker){
		$worker->beManage();
	}
}