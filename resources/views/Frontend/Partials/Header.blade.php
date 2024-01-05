<div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Old Age Home Control System<span class="text-primary">.</span> </a></div>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="{{route('master')}}" class="active nav-link">Home</a></li>
                                <li><a href="{{route('admit.form')}}" class="active nav-link">Admit Form</a></li>
                                <li class="has-children">
                                    <a class="nav-link">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('services.PersonalCare')}}" class="nav-link">Personal care</a></li>
                                        <li><a href="{{route('services.meals')}}" class="nav-link">Meals</a></li>
                                        <li><a href="{{route('services.housekeeping')}}" class="nav-link">Housekeeping</a></li>
                                        <li><a href="#" class="nav-link">Medical Care</a></li>
                                        <!-- <li><a href="#" class="nav-link">Walking</a></li> -->
                                        <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            <li><a href="{{route('testimonial')}}" class="nav-link">Testimonials</a></li>


                                <li><a href="{{route('donation.list')}}" class="nav-link">Donate</a></li>
                                <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                                <li><a href="{{route('contact.list')}}" class="nav-link">Contact</a></li>


                                @guest
                                <li><a href="{{route('User.registration')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registration</a><span class="icon-linkedin"></span></a></li>
                                <li><a href="{{route('User.login')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a><span class="icon-linkedin"></span></a></li>
                                @endguest

                                @auth
                                <li><a href="{{route('User.logout')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a><span class="icon-linkedin"></span></a></li>

                                @endauth

                    
                    <!-- <h5 class="display-5 fw-bolder">Search your product(s)</h5>

                    <form action="{{route('donation.search')}}" method="get">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <button type="submit" class="btn btn-success">Search</button>
                    </form> -->

                </div>
            </div>
        </header>
                            </ul>
                        </nav>
                    </div>



                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-white"></span></a></div>

                </div>
            </div>

        </header>


       