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
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand logo_1" href="\" style="color: white;">{{ config('app.name', 'PRIP') }}</a>
                        <a class="navbar-brand logo_2" href="\"  > {{ config('app.name', 'PRIP') }}</a>
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
                                    <a class="btn_1" href="/know">Know Your MP</a>
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

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Knowledge is Power.</h5>
                            <h1>Know more about your rights.</h1>
                            <p>To make democracy work, we must be a nation of participants, not simply observers. One who does not vote has no right to complain.</p>
                            @auth
                            <a href="/petition" class="btn_1">Petitions</a>
                            <a href="/proposal" class="btn_2">Proposals</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>We <br> Care</h2>
                        <p>You have right to know everything that is happening in and around Parliament. Think that is tough? </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Write your own petitions</h4>
                            <p>Tell the world about the problem you face.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Get Support from the community</h4>
                            <p>The more relatable your problems are to the society the more likes you will get.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>We'll help you.</h4>
                            <p>We will be your bridge and send your complaints to the higher authorities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>We are here for you.</h2>
                        <p>To make this democracy a success, everyone needs to participate. To make it easy we are here to aid you in your quest.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Know your MP and their day to day activities in Parliament for you.</li>
                            <li><span class="ti-ruler-pencil"></span>Share your problems with everyone and we'll make sure that they reach the right ears.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1024</span>
                        <h4>Petitions</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">960</span>
                        <h4>Proposals</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1020</span>
                        <h4>Users</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">820</span>
                        <h4>Issues Resolved</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->
   
    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Popular</p>
                        <h2>Proposals</h2>
                    </div>
                </div>
            </div>
            @guest
            <center><p class="text-danger text-center" style="padding-bottom: 40px;">Login to see all the proposals.</p></center>
            @endguest
            @auth
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="https://www.alexisabramson.com/wp-content/uploads/2013/05/legal-papers.jpg" class="special_img" alt="">
                        <div class="special_cource_text">
                            <?php $proposal= \App\proposal::latest()->first();?>
                           
                            <a href="/fullproposal/{{$proposal->id}}" class="btn_4">{{$proposal->title}}</a>
                            

                            <div class="author_info">
                                    <div class="author_info_text">
                                        <p>Issued by:</p>
                                        <h5><a href="#">{{$proposal->user->name}}</a></h5>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                    </div>
                   @endauth 
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    
    

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>Happy Users</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">

                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>The website is a true Gem, it is really lovely and easy to use. The petitions idea was great.</p>
                                        <h4>Guna Shekar Proddaturi </h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>


                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>I really loved the website, it was amazing and I specially loved the know your Mp section.</p>
                                        <h4>Shreya Singh</h4>
                                        <h5>Sr. High Court Advocate</h5>
                                    </div>
                                </div>

                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>PRIP is what we need in today's era, it is the absolute necessaty. Keep up the good work.
                                        Jai Hind!</p>
                                        <h4>Animesh Pratap Singh</h4>
                                        <h5>IAS officer</h5>
                                    </div>
                                </div>







                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Popular</p>
                        <h2>Petitions</h2>
                    </div>
                </div>
            </div>
            @guest
            <p class="text-danger text-center">Login to see all the petitions</p>
            @endguest
            @auth
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                             <?php $petition= \App\petition::latest()->first();?>

                                <a href="/fullpetition/{{$petition->id}}">

                                    <h5 class="card-title">{{$petition->title}}</h5>
                                </a>
                                <hr>

                                <p>Issued By:</p><br>
                                <h5>{{$petition->user->name}}</h5>


                                <ul>
                                    <li> <span class="ti-comments"></span>{{$petition->commentpetition->count('comment')}} Comments</li>
                                    <li> <span class="ti-heart"></span>@if($petition->likepetition){{$petition->likepetition->count('user_id')}} Like @endif </li>
                                </ul>

                                
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </section>
    <!--::blog_part end::-->

     <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="\" class="h4" style="color: navy blue;">{{config('app.name','PRIP')}}</a>
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