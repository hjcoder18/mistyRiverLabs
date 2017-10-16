@extends('layouts.login')

@section('title', '| Login')

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
@endsection

@section('content')
<div class="container">
    <div class="row">
    <h1>Welcome {{ Auth::user()->name }}</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<a class="btn btn-primary" href="editgallery" style="float:right">Gallery</a>
                   Home
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
