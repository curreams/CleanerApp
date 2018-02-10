@extends('layouts.admin')
@section('content')
	{!! Form::open(['route'=>'cleaner.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label("Name") !!}
			{!! Form::text("Name", null, ['class'=>'form-control', 'placeholder'=>'Insert cleaner name']) !!}

		</div>
		<div class="form-group">
			{!! Form::label("Nationality") !!}
			{!! Form::text("Nationality", null, ['class'=>'form-control', 'placeholder'=>'Insert nationality']) !!}
		</div>
	{!! Form::submit("Save", ['class'=>'btn btn-primary']) !!}	
	{!! Form::close() !!}

@stop()