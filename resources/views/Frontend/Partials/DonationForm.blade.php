@extends ('Frontend.master')


@section('content')

<h3>Donation Form:</h3>

<hr/>

<div class="container mt-5 pt-5">

<main class="fluid ">
        <div class="container col-6">
            <h1>
                Input your Information!
            </h1>
            <form action="{{route('Donation_Data_Store')}}"method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"> User_ID</label>
                    <input type="number" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your ID here">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Amount</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Payment_Method</label>
                <select name="payment_method" id="" class="form-control" required>
                    <option value="Cash">Cash</option>
                    <option value="Online">Online</option>
                 </select>
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Receiver_Account</label>
                    <input required type="text" name="receiver_account" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Transaction ID</label>
                    <input required type="text" name=" transaction_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Action</label>
                    <input required type="text" name="action" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Receipt</label>
                    <input  type="file" name="receipt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >

</div>


    






@endsection


