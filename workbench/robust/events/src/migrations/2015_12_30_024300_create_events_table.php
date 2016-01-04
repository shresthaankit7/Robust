<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events',function($tb){
			$tb->increments('id');
			$tb->integer('user_id')->unsigned();
			$tb->foreign('user_id')->references('id')->on('users');
			$tb->string('event',150);
			$tb->timestamp('deleted_at')->nullable()->default(NULL);
		});

		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
		//
	}

}
