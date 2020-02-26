@extends('layout')
@section('content')

<div class="col-12">
	<form action="{{ URL::to('storestudent')}}" method="post" enctype="multipart/form-data">
                @csrf
                              <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="student_name"  placeholder="Student Name">
                              </div>
                               <div class="form-group">
                                <label>Roll NO</label>
                                <input type="text" class="form-control" name="roll_number"  placeholder="Roll Num">
                              </div>
                              <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" name="fathers_name"  placeholder="Fathers Name">
                              </div>
                              <div class="form-group">
                                <label>Mother's Name</label>
                                <input type="text" class="form-control" name="mothers_name"  placeholder="Mothers Name">
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
                              	<label>Academic Year</label>
                              	<input type="date" class="form-control" name="academic_year">
                              </div>
                              <div class="form-group">
                              	<label>Image</label>
                              	<input type="file" class="form-control" name="image">
                              </div>
                               <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"  placeholder="Email">
                              </div>
                               <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="student_password"  placeholder="Password">
                              </div>
                               <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone"  placeholder="Phone">
                              </div>
                               <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address"  placeholder="Address">
                              </div>

                              <button type="submit" class="btn btn-primary my_button">Add Student</button>
                            </form>
</div>

@endsection
