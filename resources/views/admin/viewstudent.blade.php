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
			</tr>
			
			<tr>
				<td>{{ $view->id }}</td>
				<td>{{ $view->student_name }}</td>
				<td>{{ $view->roll_number }}</td>
				<td>{{ $view->fathers_name }}</td>
				<td>{{ $view->mothers_name }}</td>
				<td>{{ $view->department }}</td>
				<td>{{ $view->academic_year }}</td>
				 <td><img src="{{ URL::to($view->image) }}" style="height: 40px; width: 70px;"></td>
				 <td>{{ $view->phone }}</td>
				 <td>{{ $view->address }}</td>
			</tr>
			
	</table>
</div>
@endsection