@extends('layouts.login')

@section('title', '| Login')

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
@endsection

@section('navlinks')
<a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	Logout <span class="glyphicon glyphicon-log-out"></span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
</form>
@endsection

@section('content')
<div class="container">
    <div class="row">
    	<h1>Welcome {{ Auth::user()->name }}</h1>
        <div class="col-sm-12 text-center">
	        @if (session('status'))
	        	<div class="alert alert-success">
	            	{{ session('status') }}
	            </div>
	        @endif
	        <p>
	           Here you can edit/upload the gallery and litter images.
	           You are also able to edit the events that appear in the calendar.
	        </p>
	    </div>
	</div>    
	<div class="row">
	    <div class="col-sm-4 text-center">
	    	<h3>Gallery</h3>
	    	<img src="{{ asset('images/gallery2.jpg') }}" alt="No image found" height="280px" width="280px"/><br/>
        	<a class="btn btn-primary" href="editgallery">Edit Gallery</a>
        </div>
        <div class="col-sm-4 text-center">
        	<h3>Litter</h3>
        	<img src="{{ asset('images/gallery.png') }}" alt="No image found" height="280px" width="280px"/><br/>
			<a class="btn btn-primary" href="editlitter">Edit Litter</a>
		</div>
        <div class="col-sm-4 text-center">
        	<h3>Events</h3>
        	<img src="{{ asset('images/events.png') }}" alt="No image found" height="280px" width="280px"/><br/>
			<a class="btn btn-primary" href="editcalendar">Edit Events</a>
        </div>
    </div>
</div>
@endsection
