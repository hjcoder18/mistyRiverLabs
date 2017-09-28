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
<div class="banner">
	<img alt="Misty River Labs" src="{{ URL::asset('images/misty-river-labs.png') }}" height="400px" width="100%" />
</div>
<div class="row">
	<div class="col-sm-4 text-center">
		<h2>Lulu</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/lulu.jpg') }}" height="400px" width="100%" />		
		<p>
			This is our Female Lu. She is a Silver Lab. She is 2 yrs old. LuLu is one of our best hunters, her pictures can be seen in the photo gallery. She loves hunting and being outdoors.
		</p>
	</div>
	<div class="col-sm-4 text-center">
		<h2>Ember</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/ember.jpg') }}" height="400px" width="100%" />		
		<p>
			This is our Female Ember. She is a Charcoal Lab. Ember is 10 months old. She is very friendly and energetic. Ember loves children and will be a wonderful asset. She will be able to have her first litter by mid summer of 2016.
		</p>		
				
	</div>
	<div class="col-sm-4 text-center">
		<h2>Rage</h2>
		<img class="img-responsive img-thumbnail" alt="Misty River Labs" src="{{ URL::asset('images/rage.jpg') }}" height="400px" width="100%" />		
		<p>
			This is our Male Rage. He is a Silver Lab. Rage is 18 months old. He is the stud of our first litter. The pups can be seen in the puppies page. They are all sold at this time. We will be having another litter from LuLu in the next 6 months. Their arrival date will be posted on our calendar.
		</p>		
				
	</div>
</div>
@endsection
