
@extends('Master')

@section('container')

<h3>Old Age:</h3>

<a type="button" href="{{route('oldageForm')}}" class="btn btn-success btn-sm">Add Person</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>








@endsection


