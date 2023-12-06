@extends('Master')

@section('container')

<div class="container">

  <h1 class="#">Meals information(weekly)</h1>
  <a type="button" href="{{route('meal.Form')}}" class="btn btn-success">Add Meals</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Date</th>
        <th scope="col">Day</th>
        <th scope="col">Morning</th>
        <th scope="col">Noon</th>
        <th scope="col">Night</th>
        <th scope="col">Action</th>
      </tr>

    </thead>

  <tbody>
  @foreach($meals as $key=>$meal)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$meal->Data}}</td>
      <td>{{$meal->Day}}</td>
      <td>{{$meal->Morning}}</td>
      <td>{{$meal->Noon}}</td>
      <td>{{$meal->Night}}</td>
      <td>{{$meal->Action}}</td>
    
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