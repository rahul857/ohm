@extends('Master')



@section('container')

<h3>Admin Form:</h3>



<div class="container">
<form action="{{route('Admin_Data_Store')}}" method="post">
  @csrf
  <form>
  <div class="form-row">
    <div class="col">
      <input required type="text" class="form-control" name="first_name" placeholder="First name">
      @error('first_name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col">
      <input required type="text" class="form-control" name="last_name" placeholder="Last name">
      @error('last_name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required type="email" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputmobile_no1" class="form-label">Mobile No.</label>
    <input required type="mobile_no" name="mobile_no" class="form-control">
    @error('mobile_no')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  </div>
  <div class="form-group">
    <label for="inputAddress">Present Address</label>
    <input type="text" class="form-control" id="inputAddress" name="present_address" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Permanent Address </label>
    <input type="text" class="form-control" name="permanent_address" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option value="1">Dhaka</option>
        <option value="2">Rangpur</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip Form</label>
      <input type="text" name="zip_form" class="form-control" id="inputZip">
    </div>
  </div>
  <!-- <div class="mb-3 form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <input type="submit">
</form>
</div>
@endsection


