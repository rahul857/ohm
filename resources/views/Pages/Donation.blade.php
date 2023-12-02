@extends('Master')



@section('container')

<h3>Donation:</h3>

<a type="button" href="{{route('donationForm')}}" class="btn btn-success btn-sm">Add Donation</a>


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
  </thead>
  <tbody>
  @foreach($data as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Name}}</td>
      <td>{{$item->Amount}}</td>
      <td>{{$item->Payment_Method}}</td>
      <td>{{$item->Receiver_Account}}</td>
      <td>{{$item->Transaction_ID}}</td>
      <td>{{$item->Receipt}}</td>
      <td>{{$item->Action}}</td>
    
      <td>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#"class="btn btn-success">Add</a>
        <a href="#"class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    







@endsection


