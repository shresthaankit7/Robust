@extends('layout')

@section('body')

<?php
    if ( Session::has('message') )
        echo Session::get('message');
?>

<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('homepage') }}">Go TO HOME</a></li>
        <li><a href="{{ URL::to('addevent') }}">ADD a Event</a></li>
    </ul>
</nav>

<h1>All the Event</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td hidden>ID</td>
            <td>Event</td>
            <td>Description</td>
            </tr>
    </thead>
    <tbody>
    @foreach($events as $key => $value)
        <tr>
            <td hidden>{{ $value->id }}</td>
            <td>{{ $value->event }}</td>
            <td>{{ $value->description }}</td>
        </tr>


         <td>

                {{ Form::open(array('url' => 'events/' . $value->id, 'class' => 'pull-left')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this EVENT', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $value->id . '/edit') }}">Edit this Event</a>

        </td>
    @endforeach
    </tbody>
</table>

</div>
</body>
@stop


