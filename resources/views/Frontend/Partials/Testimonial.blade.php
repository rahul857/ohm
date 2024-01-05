@extends('Frontend.master')

@section('content')

<!-- <div class="container">

    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #000428, #004683);
            animation: background-color 20s;
            min-height: 100vh;
        }

        @keyframes background-color {
            0% {
                background: linear-gradient(to bottom, #000428, #004683);
            }

            25% {
                background: linear-gradient(135deg, #1a4223, #5ee95e);
            }

            50% {
                background: linear-gradient(to bottom, #421a31, #e95ed2);
            }

            100% {
                background: linear-gradient(-135deg, #fae37d, #881da8, #20668f);
            }

        }

        .container {
            margin-top: 80px;
        }

        .container .col-lg-4 {
            display: flex;
            justify-content: center;
        }

        .card {
            width: 300px;
            height: 300px;
            transform-style: preserve-3d;
            perspective: 500px;
            border: none;
            background-color: inherit;
        }

        .card .face {
            position: absolute;
            color: #fff;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.06);
            transform-style: preserve-3d;
            transition: 0.5s;
            backface-visibility: hidden;
            border-top: 1px solid #ddd;
            border-left: 1px solid #ddd;
            /* border-right: 1px solid #999;
border-bottom: 1px solid #999; */
        }

        .card .face.front-face,
        .card .face.back-face {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card .face.front-face .profile {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card .face.front-face .name {
            letter-spacing: 2px;
        }

        .card .face.front-face .designation {
            font-size: 0.8rem;
            color: #ddd;
            letter-spacing: 0.8px;
        }

        .card:hover .face.front-face {
            transform: rotateY(180deg);
        }

        .card .face.back-face {
            position: absolute;
            background: rgba(255, 255, 255, 0.06);
            transform: rotateY(180deg);
            padding: 20px 30px;
            text-align: center;
            user-select: none;
        }

        .card .face.back-face .fa-quote-left {
            position: absolute;
            top: 25px;
            left: 25px;
            font-size: 1.2rem;
        }

        .card .face.back-face .fa-quote-right {
            position: absolute;
            bottom: 35px;
            right: 25px;
            font-size: 1.2rem;
        }

        .card:hover .face.back-face {
            transform: rotateY(360deg);
        }

        @media(max-width: 991.5px) {
            .col-lg-4 {
                margin-top: 40px;
                margin-bottom: 20px;
            }
        }
    </style>


    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Robert Garrison
                        </div>
                        <div class="designation">Android Developer</div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">
                            I made bacck the purchase price in just 48 hours! Thank you for making it pain less,
                            pleasant.
                            The service was execellent. I will refer everyone I know.
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Jeffery Kennan
                        </div>
                        <div class="designation">Full Stack Developer</div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">
                            Really good, you have saved our business! I made bacck the purchase price in just 48 hours!
                            man, this thing is getting better and better as I learn more about it.
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="https://images.unsplash.com/photo-1614574762522-6ac2fbba2208?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjY2fHxtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Issac Maxwell
                        </div>
                        <div class="designation">Finance Director</div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">
                            Account keeper is the most valuable business research we have EVER purchased. Without
                            electrician, we would ahave gone bankrupt by now.
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> -->




<style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background: linear-gradient(#01579B, #03A9F4);
    background-repeat: no-repeat;
}

.card-main {
    padding: 50px;
    border-radius: 10px;
    margin-top: 50px;
    margin-bottom: 50px;
    box-shadow: 0px 4px 8px 0px #283593;
}

.card-0 {
    color: #fff;
    background-color: #536DFE;
    position: relative;
    margin-left: 70px;
    border-radius: 10px;
    min-height: 312px;
}

.carousel-indicators li {
    cursor: pointer;
    border-radius: 50% !important;
    width: 10px;
    height: 10px;
}

.profile {
    color: #000;
    background-color: #FFD54F;
    position: absolute;
    left: -70px;
    top: 17%;
    border-radius: 8px;
    border-top-left-radius: 0px; 
    border-bottom-right-radius: 0px; 
}

.profile-pic {
    width: 120px;
    height: 120px;
    border-bottom-left-radius: 10px;
    border-top-right-radius: 10px;
}

.open-quotes {
    margin-left: 130px;
    margin-top: 100px;
}

.content {
    margin-left: 150px;
    margin-right: 80px;
}

.close-quotes {
    margin-bottom: 100px;
    margin-right: 60px
}

@media screen and (max-width: 600px) {
    .card-main {
        padding: 50px 10px;
    }

    .card-0 {
        min-height: 432px;
    }

    .profile {
        top: 24%;
    }

    .profile-pic {
        width: 90px;
        height: 90px;
    }

    .open-quotes {
        margin-left: 100px;
    }

    .content {
        margin-left: 120px;
        margin-right: 50px;
    }

    .close-quotes {
        margin-right: 30px
    }
}

</style>

<div class="container-fluid px-2 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
            <div class="card card-main border-0 text-center">
                <h5 class="font-weight-bold mb-4">What our clients are saying<br>about us.</h5>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="https://billionheartsbeating.com/wp-content/uploads/2022/05/OLD-AGE-WELFARE-CENTRE-SCH-Testimonial-Telangana-Region-copy.jpg" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2">Marielle Haag</h6>
                                    <small>Backend Developer</small>
                                </div>
                                <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                <p class="content mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="https://billionheartsbeating.com/wp-content/uploads/2022/05/FATIMA-OLD-AGE-HOME-SCH-Testimonial-Telangana-Region-copy-1.jpg" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2">Ximena Vegara</h6>
                                    <small>UI/UX Designer</small>
                                </div>
                                <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</p>
                                <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Government_Seal_of_Bangladesh.svg/1200px-Government_Seal_of_Bangladesh.svg.png" class="img-fluid profile-pic">
                                    </div>
                                    <h6 class="mb-0 mt-2">John Paul</h6>
                                    <small>UI/UX Designer</small>
                                </div>
                                <img class="img-fluid open-quotes" src="https://i.imgur.com/Hp91vdT.png" width="20" height="20">
                                <p class="content mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <img class="img-fluid close-quotes ml-auto" src="https://i.imgur.com/iPcHyJK.png" width="20" height="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection