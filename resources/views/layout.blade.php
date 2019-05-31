<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRIP</title>
    <link rel="icon" href="{{asset('img/favicon.jpg')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{url('/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('/css/style.css')}}">



</head>

   <body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand logo_1" href="/" style="color: white;">{{ config('app.name', 'PRIP') }}</a>
                        <a class="navbar-brand logo_2" href="/"  > {{ config('app.name', 'PRIP') }}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                         <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                
                                 <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>

                                @if (Route::has('login'))
                                        @auth
                                        @if(Auth::user()->permission=='admin')
                                    <li class="nav-item">
                                    <a class="nav-link" href="/admin/options">Admin</a>
                                </li>
                                @else
                                    
                                @endif
                                           <li class="nav-item">
                                    <a class="nav-link" href="/proposal">Proposals</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Petitions
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/writepetition">Write a petition</a>
                                        <a class="dropdown-item" href="/petition">See all petitions</a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="/myform">Know Your MP</a>
                                </li>
                                <li class="nav-item"> <a href="{{ url('/home') }}"" class="btn_1" >Logout</a></li>
                                        @else
                                            <li class="d-none d-lg-block"><a href="/login" class="btn_1">Login</a></li>

                                        @if (Route::has('register'))
                                            <li class="d-none d-lg-block"><a href="/register" class="btn_1">Register</a></li>
                                        @endif


                                        @endauth
                                    </div>
                                @endif
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
      <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>@yield('title')</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    @yield('content')
     <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="/" class="h4" style="color: navy blue;">{{config('app.name','PRIP')}}</a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{url('/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{url('/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{url('/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{url('/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{url('/js/slick.min.js')}}"></script>
    <script src="{{url('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('/js/custom.js')}}"></script>
</body>

</html>