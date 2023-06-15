<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use \App\Models\User;
use \App\Models\Slider;
use \App\Models\Blog;
use \App\Models\HomeGallery;
use Carbon\Carbon;

class HomeController extends Controller
{
    //Logout
    public function userLogout(){
        Auth::logout();
        return redirect('login');
    }

    // Slider
    public function allSlider(){
        $sliders = Slider::latest()->paginate(6);
        
        return view('admin.slider.index', compact('sliders' ));
    }
    // Add Slider
    public function addSlider(Request $request){
        $validated = $request->validate([
            'slider_title' => 'required',
            'slider_image' => 'required|mimes: jpg,jpeg,png',
        ], [
            'slider_title.required' => 'Please enter a slider title',
            
            'slider_image.min' => 'The slider image must be atleast 4 characters long',
        ]);
        

        $brand_image = $request->file('slider_image');
        $name_generate = hexdec(uniqid());
        $image_extension = strtolower($brand_image->getClientOriginalExtension());
        $image_name = $name_generate.'.'.$image_extension;

        $upload_location = 'images/slider/';
        $last_image = $upload_location.$image_name;
        $brand_image->move($upload_location,$image_name);

        Slider::insert([
            'slider_title' => $request->slider_title,
            'slider_image' => $last_image,
            
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'Slider Added Successfully');


    }

    // Delete a slider
    public function deleteSlider($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Brand not found');
        }

        // Delete brand image if it exists
        if ($slider->slider_image && file_exists($slider->slider_image)) {
            unlink($slider->slider_image);
        }

        $slider->delete();

        return redirect()->back()->with('success', 'Slider Deleted Successfully');
    }

    // Edit Brand
    public function editSlider($id){
        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    }


    // Update Slider
    public function updateSlider(Request $request, $id)
    {
        $validated = $request->validate([
            'slider_title' => 'required',
            'brand_image' => 'nullable|mimes:jpeg,jpg,png',
        ], [
            
            
            
            'brand_image.mimes' => 'The brand image must be a file of type: jpeg, jpg, png',
        ]);
    
        $slider = Slider::find($id);
    
        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found');
        }
    
        $slider->slider_title = $request->slider_title;
    
        if ($request->hasFile('slider_image')) {
            $slider_image = $request->file('slider_image');
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($slider_image->getClientOriginalExtension());
            $image_name = $name_generate . '.' . $image_extension;
    
            $upload_location = 'images/slider/';
            $last_image = $upload_location . $image_name;
            $slider_image->move($upload_location, $image_name);
    
            // Delete previous image if it exists
            if ($slider->slider_image && file_exists($slider->slider_image)) {
                unlink($slider->slider_image);
            }
    
            $slider->slider_image = $last_image;
        }
    
        $slider->save();
    
        return redirect()->route('slider')->with('success', 'Slider Updated Successfully');
    }

    // Home  Gallery
    public function homeGallery(){
        $home_galleries = HomeGallery::latest()->get();
        return view('admin.home_gallery.index' , compact('home_galleries'));
    }
    public function addHomeGallery(){
        
        return view('admin.home_gallery.create' );
    }


    public function storeHomeGallery(Request $request){
        $validatedData = $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = new HomeGallery();

        // Image 1
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1Name = 'image1_' . time() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images/home-gallery'), $image1Name);
            $gallery->image1 = 'images/home-gallery/' . $image1Name;
        }

        // Image 2
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2Name = 'image2_' . time() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images/home-gallery'), $image2Name);
            $gallery->image2 = 'images/home-gallery/' . $image2Name;
        }

        // Image 3
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3Name = 'image3_' . time() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images/home-gallery'), $image3Name);
            $gallery->image3 = 'images/home-gallery/' . $image3Name;
        }

        // Image 4
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $image4Name = 'image4_' . time() . '.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('images/home-gallery'), $image4Name);
            $gallery->image4 = 'images/home-gallery/' . $image4Name;
        }

        $gallery->save();

        return redirect()->route('home.gallery')->with('success', 'Home Gallery added successfully.');
    }


    public function editHomeGallery($id){
        $home_galleries =HomeGallery::find($id);
        return view('admin.home_gallery.edit' , compact('home_galleries') );

    }




   

    public function updateHomeGallery(Request $request, $id)
{
    $validatedData = $request->validate([
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $gallery = HomeGallery::findOrFail($id);

    // Image 1
    if ($request->hasFile('image1')) {
        $image1 = $request->file('image1');
        $image1Name = 'image1_' . time() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('images/home-gallery'), $image1Name);

        // Delete previous photo if it exists
        if ($gallery->image1 && File::exists(public_path($gallery->image1))) {
            File::delete(public_path($gallery->image1));
        }

        $gallery->image1 = 'images/home-gallery/' . $image1Name;
    }

    // Image 2
    if ($request->hasFile('image2')) {
        $image2 = $request->file('image2');
        $image2Name = 'image2_' . time() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('images/home-gallery'), $image2Name);

        // Delete previous photo if it exists
        if ($gallery->image2 && File::exists(public_path($gallery->image2))) {
            File::delete(public_path($gallery->image2));
        }

        $gallery->image2 = 'images/home-gallery/' . $image2Name;
    }

    // Image 3
    if ($request->hasFile('image3')) {
        $image3 = $request->file('image3');
        $image3Name = 'image3_' . time() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('images/home-gallery'), $image3Name);

        // Delete previous photo if it exists
        if ($gallery->image3 && File::exists(public_path($gallery->image3))) {
            File::delete(public_path($gallery->image3));
        }

        $gallery->image3 = 'images/home-gallery/' . $image3Name;
    }

    // Image 4
    if ($request->hasFile('image4')) {
        $image4 = $request->file('image4');
        $image4Name = 'image4_' . time() . '.' . $image4->getClientOriginalExtension();
        $image4->move(public_path('images/home-gallery'), $image4Name);

        // Delete previous photo if it exists
        if ($gallery->image4 && File::exists(public_path($gallery->image4))) {
            File::delete(public_path($gallery->image4));
        }

        $gallery->image4 = 'images/home-gallery/' . $image4Name;
    }

    $gallery->save();

    return redirect()->route('home.gallery')->with('success', 'Home Gallery updated successfully.');
}
    




public function deleteHomeGallery($id)
{
    $gallery = HomeGallery::findOrFail($id);

    // Delete associated images
    if ($gallery->image1 && File::exists(public_path($gallery->image1))) {
        File::delete(public_path($gallery->image1));
    }
    if ($gallery->image2 && File::exists(public_path($gallery->image2))) {
        File::delete(public_path($gallery->image2));
    }
    if ($gallery->image3 && File::exists(public_path($gallery->image3))) {
        File::delete(public_path($gallery->image3));
    }
    if ($gallery->image4 && File::exists(public_path($gallery->image4))) {
        File::delete(public_path($gallery->image4));
    }

    $gallery->delete();

    return redirect()->back()->with('success', 'Home Gallery deleted successfully.');
}


    // Search
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search query
        $results = Blog::where('title', 'like', '%' . $query . '%')
                    ->orWhere('content', 'like', '%' . $query . '%')
                    ->get();

        return view('pages.search', compact('results', 'query'));
    }


}
