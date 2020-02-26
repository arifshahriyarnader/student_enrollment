@extends('layout')
@section('content')
<div class="col-md-12">
	

	<form action="{{ URL::to('storeteacher')}}" method="post" enctype="multipart/form-data">
                @csrf
                              <div class="form-group">
                                <label>Teacher Name</label>
                                <input type="text" class="form-control" name="teacher_name"  placeholder="Teacher Name">
                              </div>
                                <div class="form-group">
                              	<label>Image</label>
                              	<input type="file" class="form-control" name="image">
                              </div>
                              
                             
                 				<div class="form-group">
                              	<label>Department</label>
                              	<select class="form-control" name="department">
                              		<option value="1">CSE</option>
                              		<option value="2">EEE</option>
                              		<option value="3">BBA</option>
                              		<option value="4">MBA</option>
                              		<option value="5">LLB</option>
                              	</select>
                              </div>

                                <div class="form-group">
                              	<label>Blood Group</label>
                              	<input type="text" class="form-control" name="blood_group">
                              </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address"  placeholder="Address">
                              </div>

                              <button type="submit" class="btn btn-primary my_button">Add Teacher</button>
                            </form>

</div>
@endsection