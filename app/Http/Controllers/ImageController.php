<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Image;


class ImageController extends Controller
{


	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
    	return view('resizeImage');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
	    $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sizenames = ['MDPI', 'HDPI', 'XHDPI', 'XXHDPI','XXXHDPI','PlayStore'];
        $sizeW = ['48','72','96','144','192','512'];

        for ($i = 0; $i < 6; $i++){
        $image = $request->file('image');
        $input['imagename'] = $sizenames[$i].'.'."png";
     
   
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize($sizeW[$i], $sizeW[$i], function ($constraint) {
            //$constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);


        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        }
       
        //$this->postImage->add($input);


        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }


}