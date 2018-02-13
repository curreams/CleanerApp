@extends('layouts.admin')
<?php $message=Session::get('message')?>

@section('content')
@if($message == 'store')
	<div class= "alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
		Flat created
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
	<table class="table">
		<thead>
			<th>Number</th>
			<th>Dimension</th>
		</thead>
		@foreach($flats as $flat)
		<tbody>
			<td>{{ $flat -> number }}</td>
			<td>{{ $flat -> dimensions }}</td>
		</tbody>
		@endforeach
	</table>
@endsection()