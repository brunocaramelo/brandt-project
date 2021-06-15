<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{config('app.name')}}</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mlkb.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
             <a href="/">
                 <img src="img/logo-dark.jpg" alt="Logo Primario" style="max-width:120%;margin-left:-10%">
             </a>
        </div>
    <!-- Menu -->
    @include('layouts.main-menu')
    <!-- Sidebar Footer -->
    <div class="xwezi-footer">
        <div class="separator"></div>
        <p>atendimento@patriciabs.com.br</p>
        <ul>
            <li><a href="https://www.facebook.com/drapatriciabrandtschefer"><i class="ti-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/patriciabschefer/"><i class="ti-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCIOei5WlqVtUrjWqbZ6jhPQ"><i class="ti-youtube"></i></a></li>
            <li><a href="mailto:atendimento@patriciabs.com.br"><i class="ti-email"></i></a></li>
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
                <div class="col-md-4">
                    <div class="logo"> <img src="img/logocinza.jpg" class="logo" alt="Logotipo" />
                        <p><small>&copy; 2021 Patrícia Brandt Schefer.</small></p>
                    </div>
                </div>
                <div class="col-md-3" style="display:none">
                    <p><b>Contato</b>
                        <br><a href="#">Alunos</a>
                        <br><a href="#">Pacientes Modelos</a>
                        <br><a href="#">Endereço do Instituto</a>
                        </p>
                </div>
                <div class="col-md-4">
                    <p class="mb-0"><b>Redes Sociais</b></p>
                    <ul class="ovon-footer-social-link">
                        <li><a href="https://www.facebook.com/drapatriciabrandtschefer"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/patriciabshefer/"><i class="ti-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCsIei5WlqVtUrjWqbZ6jhPQ"><i class="ti-youtube"></i></a></li>
                        <li><a href="mailto:atendimento@patriciabs.com.br"><i class="ti-email"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="brand">
                        <p class="mb-0" style="padding-left:5px"><b>ABRAHOF</b></p>
                        <br />
                        <img src="img/selo-abrahof.jpg" class="logo" alt="">
                    </div>
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
    <script src="js/jquery.validate.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mklb.js"></script>
    <script src="js/contact-forms.js"></script>
</body>
</html>
