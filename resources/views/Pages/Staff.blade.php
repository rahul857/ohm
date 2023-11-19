@extends('Master')



@section('container')

<h3>Staff:</h3>

<a type="button" href="{{route('staffForm')}}" class="btn btn-success btn-sm">Add Person</a>


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
    @foreach($staffdata as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table>








@endsection


