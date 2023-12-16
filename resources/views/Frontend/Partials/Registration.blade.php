@extends('Frontend.Master')


@section('content')

<div class="col-lg-8">
<!-- <div class="container mt-3"> -->
<div class="container mt-5 pt-5">
<div class="container col-6">


<form action="{{route('User.store')}}" class="pt-5" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- </div> -->
</div>
</div>



@endsection