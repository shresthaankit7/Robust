@extends('layout')



@section('body')
<body>

	<?php
		if(Session::has('message')){

			echo "<font size='3'>".Session::get('message')."</font>";
		}
	?>

	<form action="addevent" method="get">
    <input type="submit" value="Add Event" 
         name="Submit" />
	</form>

	<form action="newUser" method="get">
    <input type="submit" value="Create New User" 
         name="Submit"/>
	</form>

	<form action="listevents" method="get">
    <input type="submit" value="List Events" 
         name="Submit"/>
	</form>		
</body>
@stop