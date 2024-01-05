@extends('frontend.master')

@section('content')

<h2>Search result for : {{ request()->search }} found {{$donation->count()}} donation.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($donation->count()>0)
    @foreach ($donation as $donation)

    
                      <!-- Donar name-->
                      <h5 class="fw-bolder">{{$donation->User_ID}}</h5>

                @endforeach

                @else

<h1>No product found.</h1>
@endif


</div>
@endsection