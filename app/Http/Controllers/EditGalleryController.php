<?php

namespace MistyRiverLabs\Http\Controllers;

use Illuminate\Http\Request;
use MistyRiverLabs\Gallery;
use Illuminate\Support\Facades\DB;
use Image;
use Auth;
use File;

class EditGalleryController extends Controller
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
    	
    	$images = DB::table('galleries')->pluck('image');
    	
		$galleries = array();
    	foreach ($images as $image) {
    		array_push($galleries, $image);
    	}
    	
    	$data = array(
    		'galleries' => $galleries,
    	);
    	
    	return view('pages.editgallery')->with($data);

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
    	
    	$img = new Gallery;
    	
    	if ($request->hasFile('image')) {
    		$image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		$location = public_path('images/gallery/' . $filename);
    		Image::make($image)->resize(800, 400)->save($location);
    		
    		$img->image = $filename;
    	}
    	else {
    		return view('pages.home');
    	}
    	
    	$img->save();
    	
    	return redirect('editgallery');
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
    	
    	File::delete('images/gallery/' . $id);
    	$images = DB::table('galleries')->where('image', $id)->delete();
        
    	return redirect('editgallery');
        
    }
}
