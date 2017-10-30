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
 <h1>Gallery</h1>
 <hr>
    <div class="row">
    <div class="col-md-6">
    {!! Form::open(['route' => 'editgallery.store', 'data-parsley-validate' => '', 'files' => true]) !!}
		{{ Form::label('image', 'Upload Image (Less than 2 MB):') }}
		{{ Form::file('image') }} <br/>
		{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
	</div>
	<div class="col-md-6">
		<a class="btn btn-primary" href="home" style="float:right">Go Back to Main Dashboard</a>
	</div>
    </div>
    <hr>
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-3 gallery_image">
        	<img src="{{ asset('images/gallery/'.$gallery) }}" alt="No image found" height="245px" width="100%"/>
        	{!! Form::open(['method' => 'DELETE', 'route' => ['editgallery.destroy', $gallery], 'data-parsley-validate' => '', 'files' => true]) !!}
        		{{ Form::submit('X', ['class' => 'btn btn-danger btn-block']) }}
        	{!! Form::close() !!}
        </div>
    	@endforeach
    </div>
</div>
@endsection
