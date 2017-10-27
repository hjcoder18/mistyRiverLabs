<?php

namespace MistyRiverLabs\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use MistyRiverLabs\Event;
use Illuminate\Support\Facades\DB;


class EditCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(!Auth::check()){
    		return redirect('login');
    	}
    	    	
    	$events = DB::table('events')->get();
    	
    	$calendar_events = array();
    	foreach ($events as $event) {
    		array_push($calendar_events, $event);
    	}

    	$data = array(
    		'events' => $calendar_events
    	);
    	
    	return view('pages.editCalendar')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// validate the data
    	$this->validate($request, array(
    		'name' => 'required|max:191',
    		'start_time' => 'required',
    		'end_time' => 'required',
    		'street' => 'required',
    		'city' => 'required',
    		'state' => 'required',
    		'details' => 'required',
    		'date' => 'required'
    	));
    	
    	//store in the Strenght Workout table
    	$event = new Event;
    	$event->name = $request->name;
    	$event->start_time= $request->start_time;
    	$event->end_time = $request->end_time;
    	$event->street= $request->street;
    	$event->city= $request->city;
    	$event->state = $request->state;
    	$event->details= $request->details;
    	$event->date = $request->date;
    	$event->save();
    	
    	return redirect('editcalendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
