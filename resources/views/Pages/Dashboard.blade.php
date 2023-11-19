@extends('Master')



@section('container')


    
<div class="container">
<h3>Deshboard:</h3>

<a type="button" href="{{route('dashboardForm')}}" class="btn btn-success btn-sm">Add Person</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Image</th>
      <th scope="col">Religion</th>
      <th scope="col">Gender</th>

    </tr>
  </thead>
  <tbody>
</div>



@endsection


