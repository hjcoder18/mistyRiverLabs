<?php

namespace MistyRiverLabs\Http\Controllers;

use Illuminate\Http\Request;
use MistyRiverLabs\Litter;
use Illuminate\Support\Facades\DB;
use Image;
use Auth;
use File;

class EditLitterController extends Controller
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
    	
    	$images = DB::table('litters')->pluck('image');
    	
    	$galleries = array();
    	foreach ($images as $image) {
    		array_push($galleries, $image);
    	}
    	
    	$data = array(
    		'galleries' => $galleries,
    	);
    	
    	return view('pages.editlitter')->with($data);
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
    		'image' => 'sometimes|image|max:2000'
    	));
    	
    	$img = new Litter;
    	
    	if ($request->hasFile('image')) {
    		$image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		$location = public_path('images/litter/' . $filename);
    		Image::make($image)->resize(800, 400)->save($location);
    		
    		$img->image = $filename;
    	}
    	else {
    		return view('pages.home');
    	}
    	
    	$img->save();
    	
    	return redirect('editlitter');
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
    	File::delete('images/litter/' . $id);
    	$images = DB::table('litters')->where('image', $id)->delete();
    	
    	return redirect('editlitter');
    }
}
