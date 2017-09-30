@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li><a href="home">Home</a></li>
<li><a href="information">Information</a></li>
<li><a href="gallery">Gallery</a></li>
<li><a href="meet">Meet the Animals</a></li>
<li><a href="litters">Litters</a></li>
<li class="active"><a href="place_order">Place Your Order</a></li>
<li><a href="training">Training</a></li>
<li><a href="events">Events</a></li>
@endsection

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
@endsection

@section('content')
<div class="row">
	<div class="col-sm-4 text-center">
		<h2>Lulu</h2>
		
	</div>
	<div class="col-sm-4 text-center">
		<h2>Ember</h2>
			
				
	</div>
	<div class="col-sm-4 text-center">
		<h2>Rage</h2>	
				
	</div>
</div>
@endsection
