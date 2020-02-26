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
		@foreach($cse_student_info as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->student_name}}</td>
			<td>{{$row->roll_number}}</td>
			<td>
				@if($row->department ==  1)
				<span class="label label-success">{{'CSE'}}</span>
				@elseif($row->department == 2)
				<span class="label label-danger">{{'EEE'}}</span>
				@elseif($row->department == 3)
				<span class="label label-primary">{{'BBA'}}</span>
				@elseif($row->department == 4)
				<span class="label label-waring">{{'MBA'}}</span>
				@elseif($row->department == 5)
				<span class="label label-success">{{'LLB'}}</span>
				 @else
				<span class="label label-important">{{'Not defind'}}</span> 
				@endif
			</td>
			<td>{{$row->academic_year}}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection