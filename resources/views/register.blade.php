@extends('layouts.principal')
<?php $message=Session::get('message')?>

@section('content')
@if($message == 'store')
	<div class= "alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
		Register created
	</div>
@endif
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
{!! Form::open(['route'=>'register.store', 'method'=>'POST']) !!}
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<p>Create Work Register</p>
				</div>
			</div>
			<div class="news">
				<div class="form-group">
					{!! Form::label("Cleaner Name") !!}
		 			{!! Form::select('Name', $names, null, ['class'=>'form-control']) !!}
				</div>
		 		<div class="form-group">
		 			{!! Form::label("Flat") !!}
		 			{!! Form::select('Flat', $flats, null,[ 'class'=>'form-control']) !!}
		 		</div>
		 		<div class="form-group">
		  		{!! Form::label("Date") !!}
		 		{!! Form::date('Date', \Carbon\Carbon::now(),['class'=>'form-control']); !!}				
				</div>
				{!! Form::submit("Save", ['class'=>'btn btn-primary']) !!}
		 	</div>	

		</div>
{!! Form::close() !!}

@endsection()