@extends('layout')
@section('content')
	<div class="col-md-12">
		<table class="table table-responsive">
			<tr>
				<th>ID</th>
				<th>Teacher Name</th>
				<th>Image</th>
				<th>Department</th>
				<th>Blood Group</th>
				<th>Address</th>
			</tr>

			<tr>
				<td>{{ $view->id }}</td>
				<td>{{ $view->teacher_name }}</td>
				<td><img src="{{URL::to($view->image)}}" style="height:40px; width:70px;"></td>
				<td>{{ $view->department }}</td>
				<td>{{ $view->blood_group }}</td>
				<td>{{ $view->address }}</td>
			</tr>
		</table>
	</div>
@endsection