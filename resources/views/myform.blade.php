<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dependent Dropdown Example with demo</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

 
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
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
                            <h2>Know Your MP</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@auth
<center><form method="post" action="/myform">
    @csrf
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Select State and City</div>
      <div class="panel-body">
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" class="form-control" style="width:350px">
                    <option value="">--- Select State ---</option>
                    @foreach ($states as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="city" class="form-control" style="width:350px">
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</div>
</div>
</form></center>


<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>
@endauth

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
    <!-- swiper js -->
    <script src="{{url('/js/slick.min.js')}}"></script>
    <script src="{{url('/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('/js/custom.js')}}"></script>
</body>

</html>