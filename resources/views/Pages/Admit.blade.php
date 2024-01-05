@extends('Master')



@section('container')

<h3>Admit Record:</h3>

<!-- <a type="button" href="{{route('donationForm')}}" class="btn btn-success btn-sm">Add Donation</a> -->


<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
        <th scope="col">Relationship</th> 
        <th scope="col">Mobile_No.</th> 
        <th scope="col">Address</th> 
        <th scope="col">Photo</th> 
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Name}}</td>
      <td>{{$item->Age}}</td>
      <td>{{$item->Gender}}</td>
      <td>{{$item->Relationship}}</td>
      <td>{{$item->Mobile_No}}</td>
      <td>{{$item->Address}}</td>
    
      <td> <img style="border-radius: 60px;" width="7%" src="{{url('/uploads//'.$item->image)}}" alt="">
            </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
    







@endsection


