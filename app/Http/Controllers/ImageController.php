<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Image;

class ImageController extends Controller
{
    public function resizeImage()
    {
    	return view('resizeImage');
    }
    public function resizeImagePost(Request $request)
    {
	    $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sizenames = ['MDPI', 'HDPI', 'XHDPI', 'XXHDPI','XXXHDPI','PlayStore'];
        $sizeW = ['48','72','96','144','192','512'];

        $image = $request->file('image');
        $downloaded_image_path = $image->move(public_path('/downloaded_input'))->getRealPath();
        chmod($downloaded_image_path, 0777);
        $img = Image::make($downloaded_image_path);
        $imageName=[];
        $destinationFolder='/thumbnail';
        for ($i = 0; $i < 6; $i++) {
            $name = $sizenames[$i];
            if($img->mime()=='image/jpeg')$name.='.jpeg';
            else if($img->mime()=='image/jpeg')$name.='.jpeg';
            else if($img->mime()=='image/png')$name.='.png';
            else if($img->mime()=='image/gif')$name.='.gif';
            else if($img->mime()=='image/tif')$name.='.tif';
            else if($img->mime()=='image/bmp')$name.='.bmp';
            else if($img->mime()=='image/ico')$name.='.ico';
            else if($img->mime()=='image/psd')$name.='.psd';
            else if($img->mime()=='image/webp')$name.='.webp';
            array_push($imageName, $destinationFolder.'/'.$name);
            $destinationPath = public_path($destinationFolder);
            $img->resize($sizeW[$i], $sizeW[$i]);
            $img->save($destinationPath . '/' . $name);
        }
        $success='Image Upload Succssfull';
        return view('resizeImage',compact('success', 'imageName', 'sizenames'));
    }


}