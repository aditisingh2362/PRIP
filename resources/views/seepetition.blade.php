@extends('layout')

@section('title','Unapproved Petitions')

@section('content')
	@if(Auth::user()->permission=='admin')
		<!--================Blog Area =================-->
	    <section class="blog_area section_padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 mb-5 mb-lg-0">
	                    <div class="blog_left_sidebar">
	                        @foreach($petitions as $petition)
	                        	@if($petition->approved_at==NULL)
	                        <article class="blog_item">
	                            <div class="blog_item_img">
	                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
	                                <a href="#" class="blog_item_date">
	                                    <h3>{{$petition->created_at->day}}</h3>
	                                    <p>{{$petition->created_at->month}}</p>
	                                </a>
	                            </div>

	                            <div class="blog_details">
	                                <a class="d-inline-block" href="single-blog.html">
	                                    <h2>{{$petition->title}}</h2>
	                                </a>
	                                <p>{{$petition->content}}</p>
	                                <form action="/admin/seepetitions/approve/{{$petition->id}}" method="post" >
	                                	@csrf
	                                	<button class="btn btn-primary" name="approve" type="submit">Approve</button>
	                                </form>
	                              	<form action="/admin/seepetitions/delete/{{$petition->id}}" method="post" style="padding-top: 10px;">
	                              		@csrf
										<button class="btn btn-danger" name="delete" type="submit">Delete</button>
									</form>
	                            
	                            </div>
	                        </article>
	                        @endif
	                        @endforeach
	                    </div>
	                </div>
	               
	    <!--================Blog Area =================-->
    @endif
@endsection	