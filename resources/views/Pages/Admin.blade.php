@extends('Master')


@section('container')

<h3>Admin:</h3>

<a type="button" href="{{route('adminForm')}}" class="btn btn-success btn-sm">Add Person</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Present Address</th>
      <th scope="col">Permanent Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
    </tr>
  </thead>
  <tbody>
    @foreach($admindata as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->first_name}}</td>
      <td>{{$item->last_name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>{{$item->present_address}}</td>
      <td>{{$item->permanent_address}}</td>
      <td>{{$item->city}}</td>
      <td>{{$item->state}}</td>
      <td>{{$item->zip_form}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $admindata->links() }}

@endsection


