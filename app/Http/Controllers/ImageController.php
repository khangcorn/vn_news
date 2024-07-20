<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
class ImageController extends Controller
{

    public function getImages()
    {
     

        return view('admin.upload');
    }

    public function uploadImage(Request $request ){
      if ($request->file('image')) {
    $image = $request->file('image');
    $imageName = time() . '.' .$image->getClientOriginalExtension();
    $image->move(public_path('images', $imageName));
    

    $imageModel = new  Image();
    $imageModel->img_name = $imageName;
    $imageModel->	url_img = '/images/' . $imageName;
    $imageModel->new_id = 2;
    $imageModel->save();

    return back()->with('success', 'Image uploaded successfully.');

      }
      return back()->with('error', 'Image upload failed.');
    }
}
