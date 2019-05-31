@extends('layout')

@section('title')
	Welcome Admin
@endsection

@section('content')
	<center><div class="table-responsive" style="padding-top: 40px;">
		<table class="table-striped table-bordered table-hover table-condensed">
			<tr>
				<th style="padding: 20px 20px 20px 20px"><a href="/admin/seepetitions" class="link">1. See all pending petitions</a></th>
			</tr>
			<tr>
				<th style="padding: 20px 20px 20px 20px"><a href="/admin/uploadproposals" class="link">2. Upload proposal</a></th>
			</tr>	
		</table>
	</div>
	</center>	
@endsection	