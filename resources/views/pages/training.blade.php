@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li><a href="welcome">Home</a></li>
<li><a href="information">Information</a></li>
<li><a href="gallery">Gallery</a></li>
<li><a href="meet">Meet the Animals</a></li>
<li><a href="litters">Litters</a></li>
<li><a href="place_order">Place Your Order</a></li>
<li class="active"><a href="training">Training</a></li>
<li><a href="events">Events</a></li>
@endsection

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
@endsection

@section('content')
<div class="row">
	<div class="col-sm-12 text-center">
		<p>
			A Labrador is a very energetic dog, and they require much care and attention. Training begins 
			at a very early age. To assist you in your training needs here are some very educational 
			and useful videos that I have found to be very useful in my training sessions.
		</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 text-center">
		<h3>Hunting Dog Training (Pre-Training Part 1)</h3>
		<div class="embed-responsive embed-responsive-4by3">
		    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/KKoOgdLSiVs"></iframe>
		</div>
	</div>
	<div class="col-sm-6 text-center">
		<h3>Gun Dog Training (Pre-Training Week 2)</h3>
		<div class="embed-responsive embed-responsive-4by3">
		    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/M_4rcyqYS5w"></iframe>
		</div>
	</div>
	<div class="col-sm-6 text-center video-padding">
		<h3>Gundog Training (Introducting Your Gundog to Gun shots)</h3>
		<div class="embed-responsive embed-responsive-4by3">
		    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/cQljL_HO2zM"></iframe>
		</div>	
	</div>
	<div class="col-sm-6 text-center video-padding">
		<h3>Gun Dog Labrador Puppy Training Week 1 (The Sit, The Retrieve, The Down)</h3>
		<div class="embed-responsive embed-responsive-4by3">
		    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/iCE-vZMl4LU"></iframe>
		</div>	
	</div>
</div>
@endsection
