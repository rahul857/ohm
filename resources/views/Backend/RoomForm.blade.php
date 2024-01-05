@extends('Master')



@section('container')

<h3>Room(Seat) Information:</h3>

<hr/>

<div class="container">
<form action="{{route('room_Data_Store')}}" method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="nameHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User_ID</label>
    <input type="number" name="user_id" class="form-control" id="exampleInputday1">
  </div> -->

  <div class="form-group">
    <label for="exampleInputEmail1">User_ID</label>
    <input type="number" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your ID here">
    </div>

  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Room_No</label>
    <input type="number." name="room_no" class="form-control" id="exampleInputday1">
  </div> -->

  <div class="form-group">
    <label for="exampleInputEmail1">Room_No</label>
    <input type="number" name="room_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Room no here">
 </div>

  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="gender" name="gender" class="form-control" id="exampleInputday1">
    <select name="gender" id="" class="form-control" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>

  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Seat_No</label>
    <input type="text" name="seat_no" class="form-control" id="exampleInputday1">
  </div> -->

  <div class="form-group">
    <label for="exampleInputEmail1">Seat_No</label>
    <input type="text" name="seat_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type seat_no here">
 </div>

  <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>

                 </select>
            </div>

  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>










@endsection


