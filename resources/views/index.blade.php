@extends('layouts.principal')
@section('content')
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<p>Cleaner Register</p>
				</div>

			</div>
		<div class="header-info">
				<h3>
				<div class="form-group">
					{!! Form::label("Cleaner Name") !!}
				</div>
				<div class="form-group">
		 			{!! Form::select('Name', $names, null,['id'=>'cleanerName', 'class'=>'form-control']) !!}
				</div>
				</h3>
		</div>

		<div class="news">
					<table id='regTable' class="table">
						<thead>
							<th>Flat</th>
							<th>Date</th>
						</thead>
					</table>
		</div>
	</div>

@stop()