@extends('layout')
@section('content')
<div class="col-md-12">
	<form action="{{ url('updateteacher',$edit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                              <div class="form-group">
                                <label>Teacher Name</label>
                                <input type="text" class="form-control" value="{{$edit->teacher_name}}" name="teacher_name"  placeholder="Teacher Name">
                              </div>
                                <div class="form-group">
                              	<label>Image</label>
                              	 <input type="file" class="form-control" name="image">
                                  Old Image: <img src="{{URL::to($edit->image)}}" style="height:40px; width:40px;">
                                  <input type="hidden" name="old_photo" value="{{$edit->image}}">
                              </div>
                              
                             
                 				<div class="form-group">
                              	<label>Department</label>
	                              	<select class="form-control" value="{{$edit->department}}" name="department">
                              		<option value="1">CSE</option>
                              		<option value="2">EEE</option>
                              		<option value="3">BBA</option>
                              		<option value="4">MBA</option>
                              		<option value="5">LLB</option>
                              	</select>
                              </div>

                                <div class="form-group">
                              	<label>Blood Group</label>
                              	<input type="text" class="form-control" value="{{$edit->blood_group}}" name="blood_group">
                              </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{$edit->address}}" name="address"  placeholder="Address">
                              </div>

                              <button type="submit" class="btn btn-primary my_button">Update Teacher</button>
                            </form>

</div>



@endsection