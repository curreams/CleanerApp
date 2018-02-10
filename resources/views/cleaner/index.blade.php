@extends('layouts.admin')
<?php $message=Session::get('message')?>

@section('content')
@if($message == 'store')
<div class= "alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
	Cleaner created
</div>
@endif
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Nationality</th>
		</thead>
		@foreach($cleaners as $cleaner)
		<tbody>
			<td>{{ $cleaner -> name }}</td>
			<td>{{ $cleaner -> nationality }}</td>
		</tbody>
		@endforeach
	</table>
@stop()