<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Preloader -->
    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
     <!-- Sidebar Section -->
     <a href="#" class="js-xwezi-nav-toggle xwezi-nav-toggle"><i></i></a>
     <aside id="xwezi-aside">
         <!-- Logo -->
         <div class="xwezi-logo">
             <a href="index.html">
                 <img src="img/logo-dark.png" alt="">
             </a>
        </div>
    <!-- Menu -->
    @include('layouts.main-menu')
    <!-- Sidebar Footer -->
    <div class="xwezi-footer">
        <div class="separator"></div>
        <p>+1 650 444 0000</p>
        <p>makeup@ovon.com</p>
        <ul>
            <li><a href="https://www.facebook.com/drapatriciabrandtschefer"><i class="ti-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/patriciabschefer/"><i class="ti-instagram"></i></a></li>
        </ul>
    </div>
    </aside>
    <div id="xwezi-main">
        <!-- Main Section -->
        @yield('content')

    <hr class="line-vr-section">
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="brand"> <img src="img/logo-dark.png" class="logo" alt="">
                        <p><small>&copy; 2020 OVON.</small></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <p><b>Get in touch</b>
                        <br>makeup@ovon.com
                        <br>+1 650 444 0000</p>
                </div>
                <div class="col-md-3">
                    <p><b>Location</b>
                        <br>525 West Ave, CT 06850
                        <br>Connecticut — Norwalk</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0"><b>FOLLOW US</b></p>
                    <ul class="ovon-footer-social-link">
                        <li><a href="index.html#"><i class="ti-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="ti-instagram"></i></a></li>
                        <li><a href="index.html#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

<!-- jQuery -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
