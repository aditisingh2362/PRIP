@extends('layout')

@section('title','Write A Petition')

@section('content')
@auth
	<center>
		<div class="container" style="padding-top: 30px;">
		<div class="row">
        <div class="col-12">
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="/admin/uploadproposals" method="post" id="contactForm" novalidate="novalidate">
          	{{csrf_field()}}
            <div class="row">
            	<div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message</button>
            </div>
          </form>
        </div>
    </div>
</div>
<h4>@if(session('message'))
{{session('message')}}
@endif</h4>
</center>
@endauth
 	@guest
    	<center><h2 style="padding-top: 20px;" class="bg-warning">*Login to write petition</h2></center>
    @endguest	
@endsection