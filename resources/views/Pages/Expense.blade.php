@extends('Master')

@section('container')

<div class="container mt-5 pt-5">

  <h1 class="pt-5 mt-5">Expense Information</h1>
  <a type="button" href="{{route('expenseForm')}}" class="btn btn-success">Add Expense Info</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Category_ID</th>
        <th scope="col">Expense_by</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
      </tr>

    </thead>

    <tbody>

    </table>

</div>

    @endsection