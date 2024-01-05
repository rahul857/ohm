@extends('Master')

@section('container')

<div class="container mt-5 pt-5">

  <h1 class="pt-5 mt-5">Room(Seat) Information</h1>
  <a type="button" href="{{route('room.Form')}}" class="btn btn-success">Add Room(Seat) Info</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Person_Name</th>
        <th scope="col">User_ID</th>
        <th scope="col">Room_No</th>
        <th scope="col">seat_No</th>
        <th scope="col">Gender</th>
        <th scope="col">Action</th>
      </tr>

    </thead>

    <tbody>
  @foreach($rooms  as $key=>$room)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$room->Name}}</td>
      <td>{{$room->User_ID}}</td>
      <td>{{$room->Mobile_No}}</td>
      <td>{{$room->Gender}}</td>
      <td>{{$room->Work_Time}}</td>
      <td>{{$room->Action}}</td>
    
      <td>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#"class="btn btn-success">Add</a>
        <a href="#"class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
 </table>

</div>

@endsection