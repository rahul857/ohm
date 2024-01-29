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
      <th scope="col">Mobile No.</th>
      <th scope="col">Present Address</th>
      <th scope="col">Permanent Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>

      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($admindata as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->first_name}}</td>
      <td>{{$item->last_name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->mobile_no}}</td>
      <td>{{$item->present_address}}</td>
      <td>{{$item->permanent_address}}</td>
      <td>{{$item->city}}</td>
      <td>{{$item->state}}</td>
      <td>{{$item->zip_form}}</td>
      <td>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#"class="btn btn-success">Add</a>
        <a href="#"class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $admindata->links() }}

@endsection


