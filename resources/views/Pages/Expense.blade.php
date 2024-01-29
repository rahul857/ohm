@extends('Master')

@section('container')

<div class="container mt-5 pt-5">

  <h1 class="pt-5 mt-5">Expense Information</h1>
  <a type="button" href="{{route('expenseForm')}}" class="btn btn-success">Add Expense Info</a>
  <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">SL</th>
        <th scope="col">User_ID</th>
        <th scope="col">Title</th>
        <th scope="col">Category_ID</th>
        <th scope="col">Expense_by</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
      </tr>

    </thead>

    <tbody>
    @foreach($expenses  as $key=>$expense)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$expense->User_ID}}</td>
      <td>{{$expense->Title}}</td>
      <td>{{$expense->Category_ID}}</td>
      <td>{{$expense->Expense_by}}</td>
      <td>{{$expense->Description}}</td>
      <td>{{$expense->Amount}}</td>
      <td>{{$expense->Date}}</td>    
    </tr>
    @endforeach
    </tbody>
    </table>

</div>

    @endsection