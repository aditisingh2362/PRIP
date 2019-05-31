@extends('layout')

@section('title','Petitions')

@section('content')
	@auth
		<!--================Blog Area =================-->
	    <section class="blog_area section_padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 mb-5 mb-lg-0">
	                    <div class="blog_left_sidebar">
	                        @foreach($petitions as $petition)
	                        	@if($petition->approved_at!=NULL)
	                        <article class="blog_item">
	                            <div class="blog_item_img">
	                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
	                                <a href="/fullpetition/{{$petition->id}}" class="blog_item_date">
	                                    <h3>{{$petition->created_at->day}}</h3>
	                                    <p>{{$petition->created_at->month}}</p>
	                                </a>
	                            </div>

	                            <div class="blog_details">
	                                <a class="d-inline-block" href="/fullpetition/{{$petition->id}}">
	                                    <h2>{{$petition->title}}</h2>
	                                </a>
	                                <ul class="blog-info-link">
	                                    <li><a href="#"><i class="far fa-comments"></i>@if($petition->commentpetition){{$petition->commentpetition->count('comment')}} Comments @endif</a></l>
	                                </ul>
	                                 <ul class="blog-info-link">
	                                    <li><a href="#"><i class="far fa-hearts"></i>@if($petition->likepetition){{$petition->likepetition->count('user_id')}} Likes @endif</a></l>
	                                </ul>
	                            </div>
	                        </article>
	                        @endif
	                        @endforeach
	                    </div>
	                </div>
	               
	    <!--================Blog Area =================-->
    @endauth
    @guest
    	<center><h2 style="padding-top: 20px;" class="bg-warning">*Login to view petitions</h2></center>
    @endguest	
@endsection
