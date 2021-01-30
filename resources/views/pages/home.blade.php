@extends('master')
@section('title', 'Gym Center')
@section('links_head')
    <!--Links fonts-->

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/animate.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/flaticon.css">

    <!--Link Style by Me -->
    <link rel="stylesheet" href="css/temp.css">

@endsection




@section( 'nav_active')
                <ul class="navbar-nav ">
                        <li class="nav-item ">
                        <a class="nav-link active" href="{{ URL('/home') }}">home </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " href="{{ URL('/about') }}">about </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ URL('/services') }}">services </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/trainers') }}">trainers </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ URL('/pricing') }}">pricing </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/contact') }}">contact </a>
                    </li>
                </ul>
@endsection

@section('body')

    <!--Start Header -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="home">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/double2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class=" animate__animated animate__bounceInLeft" style="animation-delay: 1s;">Gym Center</h5>
                    <p class="animate__animated animate__bounceInRight" style="animation-delay: 2s;">You Can Trainning in This website by two way Offline and can do your train online. </p>
                    <p class="banner-btn">
                        <a href="#" class="animate__animated animate__fadeInBottomLeft" style="animation-delay: 3s;">Online</a>
                        <a href="#" class="animate__animated animate__fadeInBottomRight" style="animation-delay: 3s;">Offline</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/double.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__slideInDown" style="animation-delay: 1s;">Gym Center</h5>
                    <p class="animate__animated animate__fadeInUp" style="animation-delay: 2s;">You Can Trainning in This website by two way Offline and can do your train online. </p>
                    <p class="banner-btn">
                        <a href="#" class="animate__animated animate__zoomIn" style="animation-delay: 3s;">Online</a>
                        <a href="#" class="animate__animated animate__zoomIn" style="animation-delay: 3s;">Offline</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/double3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animate__animated animate__zoomIn" style="animation-delay: 1s;">Gym Center</h5>
                    <p class="animate__animated animate__fadeInLeft" style="animation-delay: 2s;">You Can Trainning in This website by two way Offline and can do your train online. </p>
                    <p class="banner-btn">
                        <a href="#" class="animate__animated animate__zoomIn" style="animation-delay: 3s;">Online</a>
                        <a href="#" class="animate__animated animate__zoomIn" style="animation-delay: 3s;">Offline</a>
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--End Header-->

    <!-- Start Section About -->
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="images col-md-6 col-12 p-5">
                    <div class="row">
                        <div class="col-12 view m-0 p-0">
                            <div>
                                <img src="images/bg_2.jpg" alt="Avatar" class="image" style="width: 100%;height: 100%;">
                                <div class="overlay">
                                    <div class="text">
                                        <span><i class="fa fa-dumbbell "></i></span>
                                        <span>Gym Center</span>
                                        <span><i class="fa fa-dumbbell "></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 view m-0 p-0">
                            <div>
                                <img src="images/as4.jpeg" alt="Avatar" class="image" style="width: 100%;height: 100%;">
                                <div class="overlay">
                                    <div class="text">
                                        <span><i class="fa fa-dumbbell "></i></span>
                                        <span>Gym Center</span>
                                        <span><i class="fa fa-dumbbell "></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 view m-0 p-0">
                            <div>
                                <img src="images/as3.jpeg" alt="Avatar" class="image" style="width: 100%;height: 100%;">
                                <div class="overlay">
                                    <div class="text">
                                        <span><i class="fa fa-dumbbell "></i></span>
                                        <span>Gym Center</span>
                                        <span><i class="fa fa-dumbbell "></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info col-md-6 col-12 p-5">
                    <h5>WELCOME</h5>
                    <h1>WELCOME TO<span> GYM </span>CENTER</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from
                        the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <a href="signup_register.html">Join Us</a>
                </div>
            </div>
        </div>

    </div>
    <!-- End Section About -->

    <!-- Start Services-->
    <div class="sevices">
        <div class="container">
            <div class="servi">
                <h1>KICK YOUR <span>FEET</span> UP</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="icon mb-5">
                        <i class="fas fa-biking"></i>
                    </div>
                    <h3>ANALYZE YOUR GOAL</h3>
                    <p>Loren ispum dolor sit amet, consectetor adipisxing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="icon mb-5">
                        <i class="fas fa-weight"></i>
                    </div>
                    <h3>WORK HARD ON IT</h3>
                    <p>Loren ispum dolor sit amet, consectetor adipisxing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="icon mb-5">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>IMPROVE YOUR PERFORMANCE</h3>
                    <p>Loren ispum dolor sit amet, consectetor adipisxing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="icon mb-5">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>ACHIEVE YOUR PERFECT BODY</h3>
                    <p>Loren ispum dolor sit amet, consectetor adipisxing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services-->



    <!--Start Pricing-->

    <section class="ftco-section pricing" style="padding: 70px 0;background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/backprice.jpg);background-size: cover;background-attachment: fixed;">
        <div class="container" style="margin-bottom: 40px;">
            <div class="top">
                <h1 class="font-weight-bold">Plans & Pricing</h1>
                <div class="toggle-btn">
                    <span style="margin: 0.8em;color:#fff">Annually</span>
                    <label class="switch">
            <input type="checkbox"  id="checbox" onclick="check()"; />
            <span class="slider round" ></span>
        </label>
                    <span style="margin: 0.8em;color:#fff">Monthly</span></div>
            </div>

            <div class="package-container">
                <div class="packages">
                    <h1>Basic</h1>
                    <h2 class="text1">&dollar;9.99</h2>
                    <h2 class="text2">&dollar;119.99</h2>
                    <ul class="list">
                        <li class="first">2000 Subscribers</li>
                        <li>Weekly</li>
                        <li>Cycling</li>
                        <li>Jacosa</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>Professional</h1>
                    <h2 class="text1">&dollar;19.99</h2>
                    <h2 class="text2">&dollar;239.99</h2>
                    <ul class="list">
                        <li class="first">Basic +</li>
                        <li>Sawna</li>
                        <li>Jacosa</li>
                        <li>Boxing</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>Master</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;359.99</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Double Days</li>
                        <li>Boxing</li>
                        <li>Jacosa</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
            </div>
        </div>


    </section>




    <!--Start Trainers-->

    <section class="trainers">
        <div class="container">
            <div class="section1 text-center">
                <h2>WHAT YOU GET FROM</h2>
                <h2><span>GYM CENTER </span> MEMBERSHIP</h2>
                <p> A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>


            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(images/pexels-victor-freitas-703014.jpg)">
                        <p>Weights</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-cottonbro-4752861.jpg)">
                        <p>Boxing</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-leon-martinez-1552106.jpg)">
                        <p>Sawna</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-ketut-subiyanto-4720268.jpg)">
                        <p>Strtching</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-victor-freitas-841125.jpg)">
                        <p>Jacosa</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-pixabay-50597.jpg)">
                        <p>Lost Weight</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-roman-odintsov-4553611.jpg)">
                        <p>Muscule</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/pexels-cesar-galeão-3253498.jpg)">
                        <p>Physical</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/ss.jpg)">
                        <p>Fitness</p>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/ss3.jpg)">
                        <p>Cycling</p>
                    </div>
                </div>
            </div>

        </div>
    </section>






    <!--Start Testmoinals-->

    <div class="testimonial6 py-5">
        <div class="container">
            <div class="headmonils  m-5">
                <h1 style="text-align: center;"><i class="fa fa-dumbbell"></i> TESTMONILS <i class="fa fa-dumbbell"></i></h1>
            </div>
            <div class="row">

                <div class="col-lg-2 col-md-3">
                    <div class="nav flex-column nav-pills testi6" id="v-pills-tab" role="tablist">
                        <a class="nav-link active" data-toggle="pill" href="#t6-1" role="tab" aria-controls="t6-1" aria-expanded="true">
                            <img src="images/staff-3.jpg" alt="wrapkit" class="rounded-circle" />
                        </a>
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-2" role="tab" aria-controls="t6-2" aria-expanded="true">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/2.jpg" alt="wrapkit" class="rounded-circle" />
                        </a>
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-3" role="tab" aria-controls="t6-3" aria-expanded="true">
                            <img src="images/staff-1.jpg" alt="wrapkit" class="rounded-circle" />
                        </a>
                        </a>
                        <a class="nav-link" data-toggle="pill" href="#t6-4" role="tab" aria-controls="t6-4" aria-expanded="true">
                            <img src="images/staff-2.jpg" alt="wrapkit" class="rounded-circle" />
                        </a>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 ml-auto align-self-center">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="t6-1" role="tabpanel">
                            <h3 class="font-weight-medium">What our Customers says</h3>
                            <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </h6>
                            <div class="d-flex mt-5">
                                <div>
                                    <h5 class="mb-0 text-uppercase font-weight-normal">Lutaro smith</h5>
                                    <h6 class="subtitle font-weight-normal">Torino</h6>
                                </div>
                                <button class="btn rounded-circle btn-primary btn-md ml-auto"><i class="fa fa-comment-alt"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-2" role="tabpanel">
                            <h3 class="font-weight-medium">What our Customers says</h3>
                            <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </h6>
                            <div class="d-flex mt-5">
                                <div>
                                    <h5 class="mb-0 text-uppercase font-weight-normal">Hanna Gover</h5>
                                    <h6 class="subtitle font-weight-normal">Roma</h6>
                                </div>
                                <button class="btn rounded-circle btn-primary btn-md ml-auto"><i class="fa fa-comment-alt"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-3" role="tabpanel">
                            <h3 class="font-weight-medium">What our Customers says</h3>
                            <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </h6>
                            <div class="d-flex mt-5">
                                <div>
                                    <h5 class="mb-0 text-uppercase font-weight-normal">John carillo</h5>
                                    <h6 class="subtitle font-weight-normal">Milano</h6>
                                </div>
                                <button class="btn rounded-circle btn-primary btn-md ml-auto"><i class="fa fa-comment-alt"></i></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t6-4" role="tabpanel">
                            <h3 class="font-weight-medium">What our Customers says</h3>
                            <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </h6>
                            <div class="d-flex mt-5">
                                <div>
                                    <h5 class="mb-0 text-uppercase font-weight-normal">Gorden Ayew</h5>
                                    <h6 class="subtitle font-weight-normal">Naboli</h6>
                                </div>
                                <button class="btn rounded-circle btn-primary btn-md ml-auto"><i class="fa fa-comment-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!--Start Counter -->
    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="297">0</strong>
                        </div>
                        <div class="text">
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="2165">0</strong>
                        </div>
                        <div class="text">
                            <span>Perfect Bodies</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="378">0</strong>
                        </div>
                        <div class="text">
                            <span>Working Hours</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="730">0</strong>
                        </div>
                        <div class="text">
                            <span>Success Stories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--Make sectio Calculate Bmi-->

    <div class="calculat">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-12 pt-5">

                    <img src=" images/pexels-cesar-galeão-3253501.jpg">

                </div>
                <div class="col-lg-6  col-12" style="padding-top:80px">

                    <h1 class="font-weight-bold">Calculate Your <span style="color: #0077dd;">CALORIES</span></h1>
                    <form>
                        <div class="row">
                            <div class="col-lg-6  col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="feet">
                                </div>
                            </div>
                            <div class="col-lg-6  col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="inch">
                                </div>

                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="whieght">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" min="1" placeholder="age">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <button> Calculate </button>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <button class="bmi"> BMI </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection




    @section('links_script')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/templete.js"></script>
@endsection
