
@extends('Frontend.master')

@section('content')

<h1 class="pt-5 mt-5">Donation information</h1>
<a type="button" href="{{route('donationForm')}}" class="btn btn-success">Add Donation</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
        <th scope="col">Payment Method</th> 
        <th scope="col">Receiver Account</th> 
        <th scope="col">Transaction ID</th> 
        <th scope="col">Receipt</th> 
        <th scope="col">Action</th>
    </tr>
    @foreach($data as $key=>$dat )
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$dat->Name}}</td>
      <td>{{$dat->Amount}}</td>
      <td>{{$dat->Payment_Method}}</td>
      <td>{{$dat->Receiver_Account}}</td>
      <td>{{$dat->Transaction_ID}}</td>
      <td>{{$dat->Receipt}}</td>
      <td>{{$dat->Action}}</td>
    </tr>
    @endforeach

  </thead>
  </table>

  @endsection


