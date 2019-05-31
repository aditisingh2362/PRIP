@extends('layout')

@section('title','Proposals')

@section('content')
	@auth
		<!--================Blog Area =================-->
	    <section class="blog_area section_padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 mb-5 mb-lg-0">
	                    <div class="blog_left_sidebar">
	                        @foreach($proposals as $proposal)
	                        <article class="blog_item">
	                            <div class="blog_item_img">
	                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
	                                <a href="/fullproposal/{{$proposal->id}}" class="blog_item_date">
	                                    <h3>{{$proposal->created_at->day}}</h3>
	                                    <p>{{$proposal->created_at->month}}</p>
	                                </a>
	                            </div>

	                            <div class="blog_details">
	                                <a class="d-inline-block" href="/fullproposal/{{$proposal->id}}">
	                                    <h2>{{$proposal->title}}</h2>
	                                </a>
	                                <ul class="blog-info-link">
	                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
	                                </ul>
	                            </div>
	                        </article>
	                        @endforeach
	                    </div>
	                </div>
	               
	    <!--================Blog Area =================-->
    @endauth
    @guest
    	<center><h2 style="padding-top: 20px;" class="bg-warning">*Login to view Proposals</h2></center>
    @endguest	
@endsection
