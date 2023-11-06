@extends('Master')



@section('container')

<h3>Donation:</h3>

<a type="button" href="{{route('donationForm')}}" class="btn btn-success btn-sm">Add Donation</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Donation Amount</th>
      <th scope="col">Donation Type</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
    







@endsection


