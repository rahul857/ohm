@extends('Frontend.master')

@section('content')

<div class="container mt-0 pt-0">

  <h1 class="pt-5 mt-5">Please Fillup this Form properly</h1>
  <a type="button" href="{{route('frontendadmitForm')}}" class="btn btn-success">Add All Information here</a>

  <div class="container mt-5 pt-5">
  <h2 class="pt-2 mt-2">#Fillup this Form properly then you goto the tab Admit Information Button, Your Registration Successfull or not all details available here:<a type="button" href="{{route('seat.frontendroom')}}" class="btn btn-success">Admited Result Here</a>
</h2>
</div>
</div>


<!-- <a type="button" href="{{route('seat.room')}}" class="btn btn-success">http://127.0.0.1:8000/frontendroom</a> -->





@endsection