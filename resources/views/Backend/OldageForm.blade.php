@extends('Master')



@section('container')


<hr/>

<h3>Old Age Form:</h3>

<div class="container">
<form action="{{route('Oldage_Data_Store')}}" method="post" enctype="multipart/form-data">
  @csrf
@if(session()->has('myError'))
        <p class="alert alert-danger">{{session()->get('myError')}}</p>
        @endif

        @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif

<div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhoto" class="form-label">Photo</label>
    <input type="file" name="photo" class="form-control" id="exampleInputPhoto">
  </div>
  <div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




    







@endsection


