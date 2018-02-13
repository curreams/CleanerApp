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
	{!! Form::open(['route'=>'flat.store', 'method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label("Number") !!}
		{!! Form::text("Number", null, ['class'=>'form-control', 'placeholder'=>'Insert flat number']) !!}

	</div>
	<div class="form-group">
		{!! Form::label("Dimension") !!}
		{!! Form::text("Dimension", null, ['class'=>'form-control', 'placeholder'=>'Insert flat dimensions']) !!}
	</div>
	{!! Form::submit("Save", ['class'=>'btn btn-primary']) !!}	
	{!! Form::close() !!}

@endsection()