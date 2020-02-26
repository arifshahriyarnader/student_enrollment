@extends('layout')
@section('content')
<div class="col-md-12">
	<table class="table table-responsive">
		<tr>
			<th>ID</th>
			<th>Student Name</th>
			<th>Roll NO</th>
			<th>Department</th>
			<th>Academic Year</th>
		</tr>
		@foreach($mba_student_info as $row)
		<tr>
			<td>{{$row -> id}}</td>
			<td>{{$row -> student_name}}</td>
			<td>{{$row -> roll_number}}</td>
			<td>
				@if($row->department == 1)
				<span class="label label-success">{{'CSE'}}</span>
				@elseif($row -> department == 2)
				<span class="label label-primary">{{'EEE'}}</span>
				@elseif($row -> department == 3)
				<span class="label label-success">{{'BBA'}}</span>
				@elseif($row -> department == 4)
				<span class="label label-success">{{'MBA'}}</span>
				@elseif($row -> department == 5)
				<span class="label label-danger">{{'LLB'}}</span>
				@else
				<span class="label label-warning">{{'Not Defind'}}</span>
				@endif	
			</td>
			<td>{{$row->academic_year}}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection