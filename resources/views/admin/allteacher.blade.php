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
			@foreach($allteacher as $row)
			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->teacher_name }}</td>
				<td><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px;"></td>
				<td>{{ $row->department }}</td>
				<td>{{ $row->blood_group }}</td>
				<td>{{ $row->address }}</td>
				<td>
					<a href="{{url('editteacher', $row->id)}}" class="btn btn-info">Edit</a>
					<a href="{{url('viewteacher', $row->id)}}" class="btn btn-success">View</a>
					<a href="{{url('deleteteacher', $row->id)}}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>

@endsection