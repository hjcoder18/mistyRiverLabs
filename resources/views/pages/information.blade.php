@extends('layouts.app')

@section('title', '| Home')

@section('navlinks')
<li><a href="welcome">Home</a></li>
<li class="active"><a href="information">Information</a></li>
<li><a href="gallery">Gallery</a></li>
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
<div class="row">
	<div class="col-sm-6 text-center">
		
	{!! Form::open(['route' => '#', 'data-parsley-validate' => '', 'files' => true]) !!}

		{{ Form::label('email', 'Email') }}
	    {{ Form::text('email', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }}<br/>
		
		{{ Form::label('subject', 'Subject') }}
		{{ Form::text('subject', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }} <br/>

		{{ Form::label('message', 'Message') }}
		{{ Form::textarea('message', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }} <br/>

	
		{{ Form::submit('Send Message', ['class' => 'btn btn-primary btn-lg btn-block']) }}
		<br/>
		{!! Form::close() !!}		
	</div>
</div>
@endsection
