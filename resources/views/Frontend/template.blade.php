<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DIU Transport | home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="frontAssets/img/favicon.png" rel="icon">
    <link href="frontAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontAssets/css/all.min.css" rel="stylesheet">
    <link href="frontAssets/css/animate.min.css" rel="stylesheet">
    <link href="frontAssets/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontAssets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="frontAssets/css/boxicons.min.css" rel="stylesheet">
    <link href="frontAssets/css/glightbox.min.css" rel="stylesheet">
    <link href="frontAssets/css/remixicon.css" rel="stylesheet">
    <link href="frontAssets/css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontAssets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top top-0">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><img src="{{ asset('/') }}/frontAssets/img/logo.png" alt=""><a href="{{ asset('/') }}" class="text-success">DIU
                Transport</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>

                <li><a class="nav-link scrollto active" href="{{ asset('/') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('showSchedulePage') }}">Bus Schedule</a></li>
                @if(Session::has('id'))
                <li><a class="nav-link scrollto" href="{{ route('showOnlineTicketPage') }}">Online ticket</a></li>
                @endif

                <li><a class="nav-link scrollto" href="{{ route('showDriverPage') }}">Driver info</a></li>
                <li><a class="nav-link scrollto" href="">About</a></li>
                @php
                $customer_id = Session::get('id');
                @endphp
                @if($customer_id!=Null)
                    <li><a class="nav-link scrollto" href="{{ route('logout_customer') }}"><span>Logout</span><i class="fa-solid fa-user"></i></a></li>
                    <li><a class="nav-link scrollto" href="{{ route('history') }}"><span>Purchase history</span><i class="fa-solid fa-ticket"></i></a></li>
                @else
                    <li><a class="nav-link scrollto" href="{{ route('showUserLoginPage') }}"><span>Login</span><i class="fa-solid fa-user"></i></a></li>
                    <li><a class="nav-link scrollto" href="{{ route('showUserRegisterPage') }}"><span>Register</span><i class="fa-solid fa-user"></i></a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <a href="#" class="account"><span>My account</span><i class="fa-solid fa-user"></i></a> -->

    </div>
</header><!-- End Header -->

@yield('main')
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>DIU Transport</h3>
                    <p>
                        DSC,Ashulia<br>
                        Dhaka,Bangladesh <br><br>
                        <strong>Phone:</strong> +8801xxxxxxxxx<br>
                        <strong>Email:</strong> example@example.com<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>DIU Transport</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by Ideo It Farm
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="fa fa-arrow-up"></i></a>
<!-- Vendor JS Files -->
<script src="frontAssets/js/purecounter_vanilla.js"></script>
<script src="frontAssets/js/bootstrap.bundle.min.js"></script>
<script src="frontAssets/js/glightbox.min.js"></script>
<script src="frontAssets/js/swiper-bundle.min.js"></script>
<script src="frontAssets/js/validate.js"></script>

<!-- Template Main JS File -->
<script src="frontAssets/js/main.js"></script>

</body>

</html>
