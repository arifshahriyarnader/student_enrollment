@extends('studentlayout')
@section('content')
<div class="col-12">
	<form action="{{url('stusettingstore')}}" method="post">
		@csrf
		 <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control"  name="phone" value="{{ $settings->phone }}"  placeholder="Phone">
                              </div>
                               <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control"  name="address" value="{{ $settings->address }}"  placeholder="Address">
                              </div>
                               <button type="submit" class="btn btn-primary my_button">Update</button>
		
	</form>
</div>
@endsection