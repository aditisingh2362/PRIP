@extends('layout')

@section('title',$city->mp)

@section('content')
@auth
<center>
	<h2 style="padding-top: 10px;"><u>Know Your MP</u></h2><hr>
	<h4 style="padding-top: 5px;">MP name</h4>
	<p>{{$city->mp}}</p>
	<hr>
	<h5>Attendance</h5>
	<p>{{$city->attendance}}</p><hr>
	<h5>Petition Approved</h5>
	<p>{{$city->petitionapproved}}</p>
</center>
@endauth
@endsection