@extends('layout')


@section('body')
 <form role="form" action="addevent" method="POST">
 		 <div class="form-group col-sm-2">
   			 <label>EVENT:</label>
   			 <input class="form-control" id="event" name="event">
  		</div>
  		<div class="form-group col-sm-12">
    		<label>Description:</label>
    		<textarea rows="10" cols="150" class="form-control" id="description" name="description">
  		  </textarea>
      </div>
  		<div class="checkbox">
  			</div>
  		<div class="form-group col-sm-2">
  				<button type="submit" class="btn btn-default">Submit</button>
  		</div>
</form>
@stop
