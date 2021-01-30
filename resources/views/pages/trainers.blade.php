@extends('master')

@section('title', 'Trainers')


{{-- links css in head --}}
@section('links_head')


    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/trainer.css">


@endsection


{{-- navbar active ul --}}
@section( 'nav_active')
<ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/home') }}">home </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " href="{{ URL('/about') }}">about </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ URL('/services') }}">services </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ URL('/trainers') }}">trainers </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/pricing') }}">pricing </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/contact') }}">contact </a>
                    </li>
                </ul>

@endsection





{{-- Code Body of page --}}
@section('body')






    <section class="hero-wrap hero-wrap-2 backhomepage" style="background-image: url('images/as2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="temp.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Trainers<i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread text-primary font-weight-bold">TRAINERS</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section  bg-light">
        <div class="container">
            <div>
                <h2 style="text-align: center;color: #0077dd;padding-top: 20px;font-weight: bold; font-size: 40px;margin-bottom: 15px;">TRAIN WITH OUR TRAINERS</h2>
            </div>

            <div class="row flex-items-xs-middle flex-items-xs-center">

                <!-- Table #1  -->


                <!-- Table #1212i38213819231283219  -->

                <!-- Card Regular -->
                <div class="card card-cascade m-2" class="animate__animated animate__bounceInRight" style="animation-delay: 1s;">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <h1>About Me</h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->

                <!-- Card Regular -->
                <div class="card card-cascade m-2">
                    <div class="front">
                        <header>
                            <img src="images/trainer2.jpg">
                        </header>
                        <h2>Jordin Mar</h2>
                        <h3>Boxing Trainer</h3>
                        <hr>
                        <h5>Contact or training with him</h5>
                        <!-- Social Icons -->
                        <ul class="list-inline py-2">
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a class="mx-1 btn-floating btn-pink"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                        <a href="signup_register.html" style="color: #0077dd;">Click Here</a>
                    </div>


                    <div class="back">
                        <h1>Progress</h1>
                        <span></span>
                        <p><span><i class="fa fa-medal"></i> 3 Medals</span>
                        </p>
                        <p><span><i class="fa fa-trophy"></i> 7 Championship</span>
                        </p>
                        <p><span><i class="fa fa-award"></i> 15 Awards</span>
                        </p>
                        <hr>
                        <h1>About Me</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>
                <!--end card regular-->
            </div>
        </div>
    </section>



@endsection



{{-- Links script --}}
@section('links_script')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script src="js/templete.js"></script>



@endsection
