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
                                <li class="has-children">
                                    <a href="services.html" class="nav-link">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="nav-link">Amazing Atmosphere</a></li>
                                        <li><a href="#" class="nav-link">Courteous & Caring Staff</a></li>
                                        <li><a href="#" class="nav-link">Hospice Care</a></li>
                                        <li><a href="#" class="nav-link">Quality Medical Care</a></li>
                                        <li><a href="#" class="nav-link">Excellent Cuisine</a></li>
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
                                <li><a href="testimonial.html" class="nav-link">Testimonials</a></li>


                                <li><a href="{{route('donation.list')}}" class="nav-link">Donate</a></li>
                                <li><a href="about.html" class="nav-link">About</a></li>
                                <li><a href="contact.html" class="nav-link">Contact</a></li>


                                @guest
                                <li><a href="{{route('User.registration')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registration</a><span class="icon-linkedin"></span></a></li>
                                <li><a href="{{route('User.login')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a><span class="icon-linkedin"></span></a></li>
                                @endguest

                                @auth
                                <li><a href="{{route('User.logout')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a><span class="icon-linkedin"></span></a></li>

                                @endauth
                            </ul>
                        </nav>
                    </div>



                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-white"></span></a></div>

                </div>
            </div>

        </header>


       