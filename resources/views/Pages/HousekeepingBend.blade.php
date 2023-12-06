@extends('Master')

@section('container')

<div class="container mt-5 pt-5">

  <h1 class="pt-5 mt-5">Housekeeping Information</h1>
  <a type="button" href="{{route('housekeeping.Form')}}" class="btn btn-success">Add Housekeeping Info</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">User_ID</th>
        <th scope="col">Mobile_No</th>
        <th scope="col">Gender</th>
        <th scope="col">Work_Time</th>
        <th scope="col">Action</th>
      </tr>

    </thead>

    <tbody>
  @foreach($housekeepings  as $key=>$housekeeping)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$housekeeping->Name}}</td>
      <td>{{$housekeeping->User_ID}}</td>
      <td>{{$housekeeping->Mobile_No}}</td>
      <td>{{$housekeeping->Gender}}</td>
      <td>{{$housekeeping->Work_Time}}</td>
      <td>{{$housekeeping->Action}}</td>
    
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