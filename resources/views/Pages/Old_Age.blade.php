
@extends('Master')

@section('container')

<h3 class="pt-5">Old Age:</h3>

<a type="button" href="{{route('oldageForm')}}" class="btn btn-success btn-sm">Add Person</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($oldages as $key=> $item)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>

            <td> <img style="border-radius: 60px;" width="7%" src="{{url('/uploads//'.$item->image)}}" alt="">
            </td>
        </tr>

        @endforeach

  </tbody>
</table>








@endsection


