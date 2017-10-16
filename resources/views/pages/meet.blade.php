@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li><a href="welcome">Home</a></li>
<li><a href="information">Information</a></li>
<li><a href="gallery">Gallery</a></li>
<li class="active"><a href="meet">Meet the Animals</a></li>
<li><a href="litters">Litters</a></li>
<li><a href="place_order">Place Your Order</a></li>
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
	<div class="col-sm-12 text-center">
		<p>All of our dogs are AKC Registered. Please see attached Pedigree Charts.</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 text-center">
		<h2>Lulu</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/lulu.jpg') }}" height="400px" width="100%" />		
		<a class="btn btn-primary padigree" href="{{ URL::asset('documents/pedigree/Lulu.pdf') }}">View Pedigree Chart</a>
	</div>
	<div class="col-sm-4 text-center">
		<h2>Ember</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/ember.jpg') }}" height="400px" width="100%" />		
		<a class="btn btn-primary padigree" href="{{ URL::asset('documents/pedigree/Ember.pdf') }}">View Pedigree Chart</a>
	</div>
	<div class="col-sm-4 text-center">
		<h2>Rage</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/rage.jpg') }}" height="400px" width="100%" />
		<a class="btn btn-primary padigree" href="{{ URL::asset('documents/pedigree/Rage.pdf') }}">View Pedigree Chart</a>
	</div>
</div>
@endsection
