@extends('master')

@section('title', 'Services')


{{-- links css in head --}}
@section('links_head')


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
    <link rel="stylesheet" href="css/services.css">


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
                        <a class="nav-link active" href="{{ URL('/services') }}">services </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/trainers') }}">trainers </a>
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


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/as2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="temp.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread text-primary font-weight-bold">SERVICES</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- End Section About -->

    <!--Make sectio Calculate Bmi-->

    <div class="calculat" style="margin: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-12">

                    <img src=" images/pexels-cesar-galeão-3253501.jpg">

                </div>
                <div class="col-lg-6  col-12" style="padding-top:60px">

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


    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Program</h2>
                        <p>Our fitness experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                    </div>
                    <div class="services-items">
                        <div class="single-service-item">
                            <img src="images/icon1.png" alt="" data-pagespeed-url-hash="771213889" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <h5>Weight Lifting</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-1">
                            <img src="images/icon2.png" alt="" data-pagespeed-url-hash="1065713810" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <h5>Body Building</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-2">
                            <img src="images/icon3.png" alt="" data-pagespeed-url-hash="1360213731" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <h5>Healthy</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                        <div class="single-service-item color-3">
                            <img src="images/icon4.png" alt="" data-pagespeed-url-hash="1654713652" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <h5>Yoga</h5>
                            <p>We have a wide choice of classes that are a great complement to any training programme.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="service-video set-bg" data-setbg="img/video-bg.jpg">
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="service-video-popup"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->



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
