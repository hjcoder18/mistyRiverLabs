@extends('layouts.app')

@section('title', '| Calendar')

@section('stylesheets')
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/header.css') }}"></link>
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('css/footer.css') }}"></link>
	<link rel='stylesheet' href="{{ URL::asset('js/fullcalendar/fullcalendar.css') }}" /> 
@endsection

@section('scripts')
	<script src="{{ URL::asset('js/fullcalendar/lib/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/fullcalendar/fullcalendar.js') }}"></script>
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
		<div class="col-sm-12">
			<div class="dropdown">
				<div class="dropdown-content" style="margin-bottom:5px;">
					<button class="btn btn-default" data-toggle="modal" data-target="#addEvent"> + Event</button>
					<a class="btn btn-primary" href="home" style="float:right">Go Back to Main Dashboard</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Events Modal -->
	<div class="modal fade" id="addEvent" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Event</h4>
				</div>
				<div class="modal-body">
					<div class="tab-content">
						<!-- Training Tab in Modal-->
						<div class="tab-pane active" id="training">
							@yield('events')
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div> 
		</div>
	</div>
</div>

<div id="calendar"  style="margin-bottom:10px;"></div>

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