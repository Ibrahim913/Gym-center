<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    <!--Start nav-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="images/iconpage.jpeg" alt="" style="width: 60px;height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @yield('nav_active')

                <ul class="navbar-nav  ml-auto">

                    <li class="navbar-item mr-2 list-unstyled btn_nav">
                        <div>
                            <button class=" btn btn-primary" style="margin-left: 10px;" onclick="location.href='{{ URL('register') }}'" ;>Sign Up</button>
                        </div>
                    </li>
                    <li class="navbar-item mr-2 list-unstyled btn_nav">
                        <div>
                            <button class=" btn btn-primary" style="margin-left: 10px;" onclick="location.href='{{ URL('login') }}'" ;>login</button>
                        </div>
                    </li>
                    <li class="nav-item ml-2 ">
                        <div class="nav-link p-0 dro dropdown">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle z-depth-0 avatar" alt="avatar image" height="40">
                            <div class="dropdown-content">
                                <a href="#">Change Image</a>
                                <a href="#">Profile</a>
                                <a href="#">Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
    </nav>
    <!--End nav-->

</body>
</html>
