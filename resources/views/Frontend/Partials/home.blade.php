@extends('Frontend.master')
@section('content')


<div class="slide-item overlay" style="background-image: url('/frontend/images/rahul.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1 class="heading mb-3">Give Your Loved Ones Care</h1>
                        <p class="lead text-white mb-5">and Love Through Our Old Age Home</p>
                        <!-- <p><a href="#" class="btn btn-primary">Get In Touch</a></p> -->

                        <h5 class="display-5 fw-bolder">Search your product(s)</h5>

<form action="{{route('donation.search')}}" method="get">
    <input type="text" class="form-control" placeholder="Search..." name="search">
    <button type="submit" class="btn btn-success">Search</button>
</form>

                    </div>
                </div>
            </div>
        </div>


        <div class="feature-v1">
            <div class="d-lg-flex align-items-center w-100">
                <div class="d-flex pagination-item  h-100">
                    <span class="icon-wrap">
                        <img src="{{url('/frontend')}}/images/svg/svg/001-elderly.svg" alt="Image" class="img-fluid">
                    </span>
                    <div>
                        <span class="subheading">Try Our Services</span>
                        <h3 class="heading">Timely Meals</h3>
                        <!-- <a href="#" class="small">Learn More</a> -->
                    </div>
                </div>
                <div class="d-flex pagination-item h-100">
                    <span class="icon-wrap">
                        <img src="{{url('/frontend')}}/images/svg/svg/002-elderly-1.svg" alt="Image" class="img-fluid">
                    </span>
                    <div>
                        <span class="subheading">Try Our Services</span>
                        <h3 class="heading">We Are Helping Old People</h3>
                        <!-- <a href="#" class="small">Learn More</a> -->
                    </div>
                </div>
                <div class="d-flex pagination-item h-100">
                    <span class="icon-wrap">
                        <img src="{{url('/frontend')}}/images/svg/svg/003-rocking-chair.svg" alt="Image" class="img-fluid">
                    </span>
                    <div>
                        <span class="subheading">Try Our Services</span>
                        <h3 class="heading">Senior Home Patient Care Services</h3>
                        <!-- <a href="#" class="small">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service">
                            <a href="#" class="d-block"><img src="https://nemacare.com/images/careplanhomehealth-min.jpg" alt="Image" class="img-fluid"></a>
                            <div class="service-inner">
                                <h3>Special Care</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service">
                            <a href="#" class="d-block"><img src="https://cpimg.tistatic.com/07719999/b/4/Old-Age-Home-Nurse-Care-Services.jpg" alt="Image" class="img-fluid"></a>
                            <div class="service-inner">
                                <h3>Special Care</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service">
                            <a href="#" class="d-block"><img src="https://nemacare.com/img/Post%20Operative%20care_11zon.webp" alt="Image" class="img-fluid"></a>
                            <div class="service-inner">
                                <h3>Special Care</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service">
                            <a href="#" class="d-block"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBaiTHi-e5mFRP_y-NyFGnNQVhHYEF93gUSw&usqp=CAU" alt="Image" class="img-fluid"></a>
                            <div class="service-inner">
                                <h3>Special Care</h3>
                                <!-- <p>Lorem ipsum dolor sit amet elit.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary count-numbers">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-wrap text-center">
                            <strong class="counter d-block"><span class="number" data-number="20"></span></strong>
                            <span>Rooms Available</span>

                            <li><a href="{{route('seat.frontendroom')}}" class="nav-link"><button type="submit" class="btn btn-success">Admit Information</button><span></span></a></li>
                        </div>
                    </div>




                    <!-- <button type="submit" class="btn btn-success">Search</button> -->





                    <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-wrap text-center">
                            <strong class="counter d-block"><span class="number" data-number="10"></span></strong>
                            <span>Nurse Staff</span>
                        </div>
                    </div> -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-wrap text-center">
                            <strong class="counter d-block"><span class="number" data-number="50"></span></strong>
                            <span>Senior Living</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-wrap text-center">
                            <strong class="counter d-block"><span class="number" data-number="300"></span></strong>
                            <span>Happy People</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <div class="section-heading">
                            <!-- <h2 class="heading mb-3">Senior Care Center is for Your Family</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perspiciatis deleniti, maiores quia aliquam, odit iure aspernatur voluptate delectus ipsa.</p> -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period2/2017/06/27/Photos/Processed/Oldpeople-kOo--621x414@LiveMint.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled ul-check primary">
                                        <li>Spending Time</li>
                                        <!-- <li>Voluptate delectus ipsa</li>
                                        <li>Maiores quia aliquam</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">

                        <div class="d-block custom-media algin-items-stretch">
                            <div class="text text-center">
                                <h3>You can live here with love</h3>
                            </div>
                            <div class="img-bg" style="background-image: url('images/img_2.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cover overlay" style="background-image: url('images/slider-2.jpg')">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7 mx-auto text-center align-self-center">
                        <h1 class="mb-5 heading">Our Goal is to Make Your Life Better</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="feature">
                                    <span class="img-wrap">
                                        <img src="{{url('/frontend')}}/images/svg/svg/006-elderly-3.svg" alt="Image" class="img-fluid">
                                    </span>
                                    <h3>Expert Doctor</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature">
                                    <span class="img-wrap">
                                        <img src="{{url('/frontend')}}/images/svg/svg/005-elderly-2.svg" alt="Image" class="img-fluid">
                                    </span>
                                    <h3>Services</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature">
                                    <span class="img-wrap">
                                        <img src="{{url('/frontend')}}/images/svg/svg/004-nurse.svg" alt="Image" class="img-fluid">
                                    </span>
                                    <h3>Expert Staff</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="testimonial text-center">
                            <img src="{{url('/frontend')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                            <blockquote>
                                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                <cite class="author">Elizabeth Anderson, Senior</cite>
                            </blockquote>
                        </div> -->
                    <!-- </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="testimonial text-center">
                            <img src="{{url('/frontend')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                            <blockquote>
                                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                <cite class="author">Elizabeth Anderson, Senior</cite>
                            </blockquote>
                        </div> -->
                    <!-- </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="testimonial text-center">
                            <img src="{{url('/frontend')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                            <blockquote>
                                <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                                <cite class="author">Elizabeth Anderson, Senior</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="site-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-7 text-center">
                        <div class="heading">
                            <h2 class="text-black">Other Opportunities</h2>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="d-block d-flex custom-media algin-items-stretch">
                            <div class="text text-left">
                                <h3>You can live here with love</h3>
                                <p class="mb-4">Totally free our old age home.</p>
                                <!-- <p><a href="#" class="btn btn-outline-white">Learn More</a></p> -->
                            </div>
                            <div class="img-bg" style="background-image: https://static.toiimg.com/thumb/msid-58923587,width-400,resizemode-4/58923587.jpg"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="d-block d-flex custom-media algin-items-stretch">
                            <div class="text text-left">
                                <h3>You can live here with love</h3>
                                <p class="mb-4"> Bus and Ambulance avilable.</p>
                                <!-- <p><a href="#" class="btn btn-outline-white">Learn More</a></p> -->
                            </div>
                            <div class="img-bg" style="background-image: https://ambulancebd24.com/wp-content/uploads/2023/01/Ambulance-is-taking-people-1024x1024.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                        <img src="https://images.newindianexpress.com/uploads/user/imagelibrary/2023/7/13/w600X390/old_age_homes.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-5 ml-auto">
                        <div class="section-heading">
                            <h2 class="heading mb-3 text-white">Senior &amp; Elder Home Care Center</h2>

                            <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique amet nostrum facere hic! Inventore cumque ipsam eum, sit sequi illum.</p> -->
                            <!-- <p class="mb-4 text-white">Optio ex ullam eveniet magnam molestiae laborum, dignissimos dolorum ipsam minus, ipsum vel illo aut molestias suscipit voluptatem hic voluptatibus!</p> -->
                            <p class="text-white mb-5"><strong class="h3">&ldquo;We care for elderly people&rdquo;</strong></p>
                            <!-- <p><a href="#" class="btn btn-white">Learn More</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-7 text-center">
                        <div class="heading">
                            <h2 class="text-black">News &amp; Updates</h2>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <a href="#" class="d-block">
                                <img src="https://i.ytimg.com/vi/Rgzm-elAgvQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDDDhf26J70OY4EQDeZcXlzF4Wshg" alt="Image" class="img-fluid">
                            </a>
                            <!-- <div class="post-meta d-flex justify-content-center">
                                <span>
                                    <span class="icon-calendar"></span>
                                    <span>23 Jul</span>
                                </span>
                                <span>
                                    <span class="icon-user"></span>
                                    <span>Admin</span>
                                </span>
                                <span>
                                    <span class="icon-comment"></span>
                                    <span>2 Comments</span>
                                </span>
                            </div> -->
                            <!-- <h2><a href="#">We're Providing the Quality Care</a></h2> -->
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <a href="#" class="d-block">
                                <img src="https://api.yfbd.org/media/Phone_YFBD_Landscape_10_S9SIU9d.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-meta d-flex justify-content-center">
                                <!-- <span>
                                    <span class="icon-calendar"></span>
                                    <span>23 Jul</span>
                                </span>
                                <span>
                                    <span class="icon-user"></span>
                                    <span>Admin</span>
                                </span>
                                <span>
                                    <span class="icon-comment"></span>
                                    <span>2 Comments</span>
                                </span> -->
                            </div>
                            <!-- <h2><a href="#">We're Providing the Quality Care</a></h2> -->
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <a href="#" class="d-block">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7A3UiXzKEj5fjU3h4dqWNPyxl3C91IrXLsiDeuRISb2AyTYsZI7GE5uJxqkYRx6sQRFQ&usqp=CAU" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-meta d-flex justify-content-center">
                                <!-- <span>
                                    <span class="icon-calendar"></span>
                                    <span>23 Jul</span>
                                </span>
                                <span>
                                    <span class="icon-user"></span>
                                    <span>Admin</span>
                                </span>
                                <span>
                                    <span class="icon-comment"></span>
                                    <span>2 Comments</span>
                                </span> -->
                            </div>
                            <!-- <h2><a href="#">We're Providing the Quality Care</a></h2> -->
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>s
@endsection