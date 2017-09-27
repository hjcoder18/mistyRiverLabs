@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li class="active"><a href="#">Home</a></li>
<li><a href="#">Information</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Meet the Animals</a></li>
<li><a href="#">Litters</a></li>
<li><a href="#">Place Your Order</a></li>
<li><a href="#">Training</a></li>
<li><a href="#">Events</a></li>
@endsection

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
@endsection

@section('content')
		<div class="row">
			<div class="col-sm-6">
				<h1>Hello World!</h1>
				
			</div>
		</div>
@endsection
