@extends('Master')



@section('container')

<h3>Meals Information:</h3>

<hr/>

<div class="container">
<form action="{{route('Meals_Data_Store')}}" method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="datelHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Day</label>
    <input type="day" name="day" class="form-control" id="exampleInputday1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Morning</label>
    <input type="morning" name="morning" class="form-control" id="exampleInputday1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Noon</label>
    <input type="noon" name="noon" class="form-control" id="exampleInputday1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Night</label>
    <input type="night" name="night" class="form-control" id="exampleInputday1">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



    
<h3>Doctor Information:</h3>







@endsection


