@extends('layouts.calendar', ['variable' => $events])

@section('events')
	{!! Form::open(['route' => 'editcalendar.store', 'data-parsley-validate' => '', 'files' => true]) !!}
		{{ Form::label('name', 'Event Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }}
		{{ Form::label('start_time', 'Start Time:') }}
        {{ Form::time('start_time', 'null', ['class' => 'form-control', 'required', 'step'=>'any']) }}
		{{ Form::label('end_time', 'End Time:') }}
		{{ Form::time('end_time', 'null', ['class' => 'form-control', 'required', 'step'=>'any']) }}
		{{ Form::label('street', 'Street:') }}
		{{ Form::text('street', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }}
		{{ Form::label('city', 'City:') }}
		{{ Form::text('city', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }}
		{{ Form::label('state', 'State') }}
		{{ Form::select('state',[
			'States' => [
				null => 'Please Select',
				'AL' => 'Alabama',
				'AK' => 'Alaska',
				'AZ' => 'Arizona',
				'AR' => 'Arkansas',
				'CA' => 'California',
				'CO' => 'Colorado',
				'CT' => 'Connecticut',
				'DE' => 'Delaware',
				'DC' => 'District Of Columbia',
				'FL' => 'Florida',
				'GA' => 'Georgia',
				'HI' => 'Hawaii',
				'ID' => 'Idaho',
				'IL' => 'Illinois',
				'IN' => 'Indiana',
				'IA' => 'Iowa',
				'KS' => 'Kansas',
				'KY' => 'Kentucky',
				'LA' => 'Louisiana',
				'ME' => 'Maine',
				'MD' => 'Maryland',
				'MA' => 'Massachusetts',
				'MI' => 'Michigan',
				'MN' => 'Minnesota',
				'MS' => 'Mississippi',
				'MO' => 'Missouri',
				'MT' => 'Montana',
				'NE' => 'Nebraska',
				'NV' => 'Nevada',
				'NH' => 'New Hampshire',
				'NJ' => 'New Jersey',
				'NM' => 'New Mexico',
				'NY' => 'New York',
				'NC' => 'North Carolina',
				'ND' => 'North Dakota',
				'OH' => 'Ohio',
				'OK' => 'Oklahoma',
				'OR' => 'Oregon',
				'PA' => 'Pennsylvania',
				'RI' => 'Rhode Island',
				'SC' => 'South Carolina',
				'SD' => 'South Dakota',
				'TN' => 'Tennessee',
				'TX' => 'Texas',
				'UT' => 'Utah',
				'VT' => 'Vermont',
				'VA' => 'Virginia',
				'WA' => 'Washington',
				'WV' => 'West Virginia',
				'WI' => 'Wisconsin',
				'WY' => 'Wyoming',
			],
		], null, ['required']) }} <br/>
		{{ Form::label('details', 'Details') }}
		{{ Form::textarea('details', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }} <br/>
		{{ Form::label('date', 'Date:') }}
		<br/>
		{{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'date']) }}<br/><br/>
		{{ Form::submit( 'Submit', array('type' => 'submit', 'name' => 'submit_strength', 'class' => 'btn btn-success')) }}
	{!! Form::close() !!}
@endsection
