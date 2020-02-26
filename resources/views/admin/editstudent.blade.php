@extends('layout')
@section('content')
<div class="col-md-12">
  <form action="{{ url('updatestudent',$edit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                              <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" class="form-control" value="{{$edit->student_name}}" name="student_name"  placeholder="Student Name">
                              </div>
                               <div class="form-group">
                                <label>Roll NO</label>
                                <input type="text" class="form-control" value="{{$edit->roll_number}}" name="roll_number"  placeholder="Roll Num">
                              </div>
                              <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" value="{{$edit->fathers_name}}" name="fathers_name"  placeholder="Fathers Name">
                              </div>
                              <div class="form-group">
                                <label>Mother's Name</label>
                                <input type="text" class="form-control" value="{{$edit->mothers_name}}" name="mothers_name"  placeholder="Mothers Name">
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
                                <label>Academic Year</label>
                                <input type="date" class="form-control" value="{{$edit->academic_year}}" name="academic_year">
                              </div>
                              <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                  Old Image: <img src="{{URL::to($edit->image)}}" style="height:40px; width:40px;">
                                   <input type="hidden" name="old_photo" value="{{$edit->image}}">
                              </div>
                               
                              
                               <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" value="{{$edit->phone}}" name="phone"  placeholder="Phone">
                              </div>
                               <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{$edit->address}}" name="address"  placeholder="Address">
                              </div>

                              <button type="submit" class="btn btn-primary my_button">Update</button>
                            </form>
</div>
@endsection