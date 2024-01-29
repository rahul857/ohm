@extends ('Frontend.master')


@section('content')
<div class="container mt-5 pt-5">
<h3>Admit Registration Form:</h3>
</div>
<hr/>

<div class="container mt-2 pt-2">

<main class="fluid ">
        <div class="container col-6">
            <h1>
                Input your Information!
            </h1>
            <form action="{{route('Admit_Data_Store')}}"method="post">
                @csrf
               
                <!-- <h3 class="mb-5">Sign in</h3>

<div class="form-outline mb-4">
    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="email" />
    <label class="form-label" for="typeEmailX-2">Email</label>
</div> -->

<div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName1">
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputName1">
  </div>
  <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender" id="" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Relationship</label>
                <select name="relationship" id="" class="form-control" required>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Others">Others</option>

                 </select>
            </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile_No</label>
    <input type="number" name="mobile_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputName1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhoto" class="form-label">Photo</label>
    <input type="file" name="photo" class="form-control" id="exampleInputPhoto">
  </div>
  

<button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

<hr class="my-4">


                <!-- </div> -->
                <!-- <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form> -->
        </div>
    </main >

</div>


    






@endsection


