@extends('Master')



@section('container')

<h3>Expense Information:</h3>

<hr/>

<div class="container">
<form action="{{route('Staff_Data_Store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"> User_ID</label>
    <input type="number" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your ID here">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="title" class="form-control" name="title" id="exampleInputTitle" aria-describedby="titleHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Catrgory_ID</label>
    <input type="category_id" class="form-control" name="category_id" id="exampleInputCategory_id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Expense_By</label>
    <input type="expense_by" class="form-control" name="expense_by" id="exampleInputExpense_by" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="description" class="form-control" name="description" id="exampleInputDescription" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Amount</label>
    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" class="form-control" name="date" id="exampleInputDate" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>






@endsection


