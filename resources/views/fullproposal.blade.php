@extends('layout')

@section('title',$proposal->title)

@section('content')
@auth
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 posts-list">
               <div class="single-post">
                                 <a href="#comment"></a>

                  <div class="blog_details">
                     <h2>{{$proposal->title}}
                     </h2>
                        
                     <p class="excert">
                        {!!$proposal->content!!}
                     </p>
                  </div>
               </div>

       <div class="navigation-top">
                  <div class="comments-area">

                      <ul class="blog-info-link">

                                       <li><form action="/fullproposal/like/{{$proposal->id}}" method="post"> @csrf <i class="far fa-hearts"></i><button class="btn btn-primary" type="submit" name="submit"> @if($proposal->likeproposal){{$proposal->likeproposal->count('user_id')}}</button> <h4 style="padding-top:7px; ">Likes</h4> @endif</form></l>
                                   </ul><hr>
                  <h4>@if($proposal->commentproposal){{$proposal->commentproposal->count('comment')}} Comments @else 0 Comments <br><br><p>Be the first One to comment</p> @endif</h4>

               @if($proposal->commentproposal)
                    @if($proposal->commentproposal)
                     @foreach($proposal->commentproposal->sortByDesc('created_at') as $comment)
                        <div class="comment-list">
                         
                           <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">
                                 <div class="thumb">
                                    <img src="img/comment/comment_1.png" alt="">
                                 </div>
                                 
                                 <div class="desc">
                                    <p class="comment">
                                       
                                       {{$comment->comment}}
                                       
                                    </p>
                                    <div class="d-flex justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <p class="date">Commented By: {{$comment->user->name}}</p><br>
                                          <p class="date">Date: {{$comment->created_at}}</p>
                                       </div>
                                       
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                  @endforeach
                  @endif
               @endif

               <div class="comment-form">
                  <h4>Leave a comment</h4>
                  <form class="form-contact comment_form" action="/fullproposal/comment/{{$proposal->id}}" id="commentForm" method="post">
                     @csrf
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        
                        
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button btn_1 button-contactForm">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
      </div>
   </section>
   @endauth
   <!--================Blog Area end =================-->
@endsection