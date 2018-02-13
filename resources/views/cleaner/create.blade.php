@extends('layouts.admin')
@section('content')
	@if(count($errors)>0)
		<div class= "alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
			Error: 
			@foreach($errors->all() as $error)
				{{ $error }}
				</br>
			@endforeach
		</div>
	@endif
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

@endsection()