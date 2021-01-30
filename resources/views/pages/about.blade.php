@extends('master')

@section('title', 'About')


{{-- This is code for load links css --}}
@section('links_head')
    <!--Links fonts-->
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
    <link rel="stylesheet" href="css/about.css">

@endsection



{{-- This is code for change nav active ul --}}
@section( 'nav_active')
<ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ URL('/home') }}">home </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link active" href="{{ URL('/about') }}">about </a>
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



{{-- This is code for Body of Page --}}
@section('body')





    <section class="hero-wrap hero-wrap-2 " style="background-image: url( 'images/as2.jpg'); " data-stellar-background-ratio="0.5 ">
        <div class="overlay "></div>
        <div class="container ">
            <div class="row no-gutters slider-text align-items-end ">
                <div class="col-md-9 ftco-animate pb-5 ">
                    <p class="breadcrumbs mb-2 "><span class="mr-2 "><a href="temp.html ">Home <i class="ion-ios-arrow-forward "></i></a></span> <span>About <i class="ion-ios-arrow-forward "></i></span></p>
                    <h1 class="mb-0 bread ">ABOUT</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End Header-->

    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="images col-md-6 col-12 p-5">
                    <div class="row">
                        <div class="col-12 view m-0 p-0">
                            <div>
                                <img src="images/backprice.jpg" alt="Avatar" class="image" style="width: 100%;height: 100%;">
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


    <section class="choseus-section set-bg spad " data-setbg="img/chose-us-bg.jpg " style="background-color:#000; ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="section-title ">
                        <h2>Why Choose Us</h2>
                        <p>Our fitness experts can help you discover new training techniques.</p>
                    </div>
                </div>
            </div>
            <div class="chose-items ">
                <div class="row ">
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="ci-item ">
                            <i class="fas fa-crown "></i>
                            <h5>How do I become an author?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="ci-item ">
                            <i class="fas fa-cube "></i>
                            <h5>Is my license transferable?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="ci-item ">
                            <i class="fas fa-shopping-cart "></i>
                            <h5>What do you mean by item?</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="ci-item ">
                            <i class="fas fa-user-tie "></i>
                            <h5>Top notch customer support</h5>
                            <p>Event Calendar and Event Calendar Pro full support out of the box.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Class Time table-->
    <section class="trainer-schedule class-timetable spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="section-title ">
                        <h2>Class Timetable</h2>
                        <div class="nav-controls ">
                            <ul class="schedule-filter ">
                                <li class="minitup-control-active " data-filter="all">All Class</li>
                                <li data-filter=".gym" class=" ">Gym</li>
                                <li data-filter=".crossfit" class=" ">Crossfit</li>
                                <li data-filter=".cardio" class=" ">Cardio</li>
                                <li data-filter=".body" class=" ">Body</li>
                                <li data-filter=".yoga" class=" ">Yoga</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>TIME && DAY</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time ">10.00</td>
                                    <td class="gym mix box-item " data-tsmeta="gym ">
                                        <h6>Gym</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Volcanoes
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="yoga mix box-item " data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> EveryMove
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="body mix box-item " data-tsmeta="body ">
                                        <h6>Body</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Power Play

                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="cardio mix box-item " data-tsmeta="cardio ">
                                        <h6>Cardio</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Accelerate
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time ">14.00</td>
                                    <td></td>
                                    <td class="running mix box-item " data-tsmeta="running ">
                                        <h6>Running</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> LoseIt!

                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="box mix box-item " data-tsmeta="box ">
                                        <h6>Box</h6>
                                        <span>14.00 - 15.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> FITGYM
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="gym mix box-item " data-tsmeta="gym ">
                                        <h6>Gym</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Point Gym
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time ">16.00</td>
                                    <td class="cardio mix box-item " data-tsmeta="cardio ">
                                        <h6>Cardio</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> FITGYM
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="gym mix box-item " data-tsmeta="gym ">
                                        <h6>Gym</h6>
                                        <span>16.00 - 19.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> FITGYM
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="yoga mix box-item " data-tsmeta="yoga ">
                                        <h6>Yoga</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> LoseIt!
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="gym mix box-item " data-tsmeta="gym ">
                                        <h6>Gym</h6>
                                        <span>16.00 - 20.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Power Play
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time ">18.00</td>
                                    <td class="box mix box-item " data-tsmeta="box ">
                                        <h6>Box</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Point Gym
                                        </div>
                                    </td>
                                    <td class="body mix box-item " data-tsmeta="body ">
                                        <h6>Body</h6>
                                        <span>18.00 - 20.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Accelerate
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="crossfit mix box-item " data-tsmeta="crossfit ">
                                        <h6>Crossfit</h6>
                                        <span>18.00 - 21.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> FITGYM
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="cardio mix box-item " data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> EveryMove
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time ">20.00</td>
                                    <td></td>
                                    <td class="gym mix box-item " data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>20.00 - 12.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> LoseIt!
                                        </div>
                                    </td>
                                    <td class="body mix box-item " data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Volcanoes
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="cardio mix box-item " data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>20.00 - 22.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> Accelerate
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="crossfit mix box-item " data-tsmeta="crossfit">
                                        <h6>Crossfit</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name ">
                                            <i class="fa fa-map-marker-alt"></i> FITGYM
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection



{{-- This is code for load links javascript  --}}

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

    <script>
        $(document).ready(function() {
            var mixer = mixitup('.schedule-table')

        });
    </script>

@endsection
