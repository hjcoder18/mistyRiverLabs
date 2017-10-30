@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li><a href="welcome">Home</a></li>
<li><a href="information">Information</a></li>
<li class="active"><a href="gallery">Gallery</a></li>
<li><a href="meet">Meet the Animals</a></li>
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
	<h1>Gallery</h1>
	<div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-3 gallery_image">
        	<img src="{{ asset('images/gallery/'.$gallery) }}" alt="No image found" height="280px" width="280px"/>
        </div>
    	@endforeach
    </div>
@endsection
