@extends('Master')



@section('container')

<h3>Doctor:</h3>

<a type="button" href="{{route('doctorForm')}}" class="btn btn-success btn-sm">Add Person</a>


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
        @foreach($doctors as $key=> $item)
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