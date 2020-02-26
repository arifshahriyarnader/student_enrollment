@extends('layout')
@section('content')
<div class="col-md-12">
	<table class="table table-responsive">
		<tr>
			<th>Id</th>
			<th>Student Name</th>
			<th>Roll No</th>
			<th>Father's Name</th>
			<th>Mother's Name</th>
			<th>Department</th>
			<th>Academic Year</th>
			<th>Image</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Action</th>
			</tr>
			@foreach($allstudent as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td>{{$row->student_name}}</td>
				<td>{{$row->roll_number}}</td>
				<td>{{$row->fathers_name}}</td>
				<td>{{$row->mothers_name}}</td>
				<td>{{$row->department}}</td>
				<td>{{$row->academic_year}}</td>
				 <td><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px;"></td>
				 <td>{{$row->phone}}</td>
				 <td>{{$row->address}}</td>
				<td>
					<a href="{{url('editstudent', $row->id)}}" class="btn btn-info">Edit</a>
					<a href="{{url('viewstudent', $row->id)}}" class="btn btn-success">View</a>
					<a href="{{url('deletestudent', $row->id)}}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
	</table>
</div>

@endsection