<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \App\Models\User;
use \App\Models\Blog;
use \App\Models\Gallery;

use Carbon\Carbon;

class GalleryController extends Controller
{
    public function adminGallery(){
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }
    // Add To Gallery
    public function addGallery(Request $request){
        $validated = $request->validate([
            'image.*' => 'required|mimes:jpg,jpeg,png',
        ], 
        [
            'image.*.required' => 'The image field is required',
            'image.*.mimes' => 'The image must be a file of type: jpg, jpeg, png',
        ]);
        if (!$request->hasFile('image')) {
            return redirect()->back()->withErrors(['image' => 'Please select an image'])->withInput();
        }
        $images = $request->file('image');
    
        foreach ($images as $image) {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = $name_generate.'.'.$image_extension;
    
            $upload_location = 'images/gallery/';
            $last_image = $upload_location.$image_name;
            $image->move($upload_location, $image_name);
    
            Gallery::insert([
                'image' => $last_image,
                'created_at' => Carbon::now(),
            ]);
        }
    
        return redirect()->back()->with('success', 'Gallery Added Successfully');
    }



    public function deleteGallery($id){
        $gallery = Gallery::findOrFail($id);
        $imagePath = public_path($gallery->image);

        // Delete image from storage
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete gallery record from the database
        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery Deleted Successfully');
    }

}
