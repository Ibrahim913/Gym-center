@extends('master')

@section('title', 'Pricing')


{{-- links css in head --}}
@section('links_head')

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pricing.css">


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
                        <a class="nav-link " href="{{ URL('/trainers') }}">trainers </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ URL('/pricing') }}">pricing </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/contact') }}">contact </a>
                    </li>
                </ul>

@endsection





{{-- Code Body of page --}}
@section('body')

{{-- Header slider --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/as2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="temp.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread text-primary">PRICING</h1>
                </div>
            </div>
        </div>
    </section>




{{-- section Pricing --}}


    <section class="ftco-section pricing">
        <div class="container">
            <div class="top">
                <h1>Plans & Pricing</h1>
                <div class="toggle-btn">
                    <span style="margin: 0.8em;">Annually</span>
                    <label class="switch">
            <input type="checkbox" id="checbox" onclick="check()"/>
            <span class="slider round"></span>
        </label>
                    <span style="margin: 0.8em;">Monthly</span></div>
            </div>

            <div class="package-container">
                <div class="packages">
                    <h1>ONE DAY TRAINING</h1>
                    <h2 class="text1">&dollar;7.30</h2>
                    <h2 class="text2">&dollar;5.80</h2>
                    <ul class="list">
                        <li class="first">2000 Subscribers</li>
                        <li>12,000 Emails/month</li>
                        <li>Multi-User Accounts</li>
                        <li>Email Support</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>ONE DAY TRAINING</h1>
                    <h2 class="text1">&dollar;19.40</h2>
                    <h2 class="text2">&dollar;7.40</h2>
                    <ul class="list">
                        <li class="first">Basic +</li>
                        <li>Boxing</li>
                        <li>Fitness Orientation</li>
                        <li>Premium Support</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>ONE DAY TRAINING</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;10.55</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Group Trainer</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>PAY EVERY MONTH</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;60.45</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>PAY EVERY MONTH</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;80.18</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>
                <div class="packages">
                    <h1>PAY EVERY MONTH</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;90.15</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>

                <div class="packages">
                    <h1>1 YEAR MEMBERSHIP</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;280.60</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>

                <div class="packages">
                    <h1>1 YEAR MEMBERSHIP</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;310.70</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>

                <div class="packages">
                    <h1>1 YEAR MEMBERSHIP</h1>
                    <h2 class="text1">&dollar;29.99</h2>
                    <h2 class="text2">&dollar;359.99</h2>
                    <ul class="list">
                        <li class="first">Professional +</li>
                        <li>Marketing Automation</li>
                        <li>Instagram Ads</li>
                        <li>Facebook Ads</li>
                    </ul>
                    <a href="#" class="button button3">Start Now</a>
                </div>

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
