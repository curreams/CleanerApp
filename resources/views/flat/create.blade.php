@extends('layouts.admin')
@section('content')
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