@extends('layouts.app')

@section('title', '| Events')

@section('navlinks')
<li><a href="welcome">Home</a></li>
<li><a href="information">Information</a></li>
<li><a href="gallery">Gallery</a></li>
<li><a href="meet">Meet the Animals</a></li>
<li><a href="litters">Litters</a></li>
<li><a href="place_order">Place Your Order</a></li>
<li><a href="training">Training</a></li>
<li class="active"><a href="events">Events</a></li>
@endsection

@section('stylesheets')
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
<link rel='stylesheet' href="{{ URL::asset('js/fullcalendar/fullcalendar.css') }}" /> 
@endsection

@section('scripts')
	<script src="{{ URL::asset('js/fullcalendar/lib/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/fullcalendar/fullcalendar.js') }}"></script>
@endsection

@section('content')
<div id="calendar" style="margin-bottom:10px;"></div>

<script>
$(document).ready(function() {
    var BASEURL = "{{ url('/') }}";
    $('#calendar').fullCalendar({
    	eventLimit: true, // for all non-agenda views
        views: {
            agenda: {
                eventLimit: 6 // adjust to 6 only for agendaWeek/agendaDay
            }
        },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        navLinks: true,
        displayEventTime: false,
        editable: false,
        selectable: true,
        selectHelper: true,
        select: function(date){
           date = moment(date.format());
           $('input.date').val(date.format('YYYY-MM-DD'));
           jQuery.noConflict();
           $('#addTraining').modal('toggle');
        },
        events: BASEURL + '/events',
        eventSources: [{
		    events: [ // put the array in the `events` property
		    	@foreach($events as $event)		    	
		        {
		            title  : <?php echo json_encode($event->name); ?>,
				    data   : {
					    identity: 'events',
				    	start: <?php echo json_encode($event->start_time); ?>,
						end: <?php echo json_encode($event->end_time); ?>,
						street: <?php echo json_encode($event->street); ?>,
						city: <?php echo json_encode($event->city); ?>,
						state: <?php echo json_encode($event->state); ?>,
				    },
		            date  : <?php echo json_encode($event->date); ?>
		        },
		        @endforeach		        
		    ],
		    color: '#127c96',     // an option!
		    textColor: '#efefef' // an option!
		}],
		
	    eventClick: function(event) {
		    if (event.data.identity == 'events') {
		    	alert('Name: ' + event.title + '\n' + 'Stare Time: ' + event.data.start + '\n' + 'End Time: ' + event.data.end + '\n' + 'Street: ' + event.data.street + '\n' + 'City: ' + event.data.city + '\n' + 'State: ' + event.data.state);
			}

	    }
	});
});
</script>
@endsection