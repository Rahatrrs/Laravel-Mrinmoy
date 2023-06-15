<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use \App\Models\User;
use \App\Models\Blog;

use Carbon\Carbon;

class BlogController extends Controller
{
    public function allBlogs(){
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs' ));
    }
    public function addBlog(){
        
        return view('admin.blog.create');
    }



    


public function storeBlog(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'type' => 'required',
    ]);

    $user = Auth::user();

    $blog = new Blog();
    $blog->title = $request->title;
    $blog->content = $request->content;
    $blog->type = $request->input('type');
    $blog->user_id = $user->id;
    $blog->created_at = now(); // Add the current timestamp
    
    // Image 1
    if ($request->hasFile('image1')) {
        $image1 = $request->file('image1');
        $image1Name = 'image1_' . time() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('images/blog'), $image1Name);
        $blog->image1 = 'images/blog/' . $image1Name;
    }

    // Image 2
    if ($request->hasFile('image2')) {
        $image2 = $request->file('image2');
        $image2Name = 'image2_' . time() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('images/blog'), $image2Name);
        $blog->image2 = 'images/blog/' . $image2Name;
    }

    // Image 3
    if ($request->hasFile('image3')) {
        $image3 = $request->file('image3');
        $image3Name = 'image3_' . time() . '.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('images/blog'), $image3Name);
        $blog->image3 = 'images/blog/' . $image3Name;
    }

    $blog->save();

    return redirect()->route('blog')->with('success', 'Blog added successfully.');
}



    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $user = Auth::user();

        // Check if the logged-in user is the owner of the blog
        if ($blog->user_id !== $user->id) {
            return redirect()->back()->with('error', 'You are not authorized to delete this blog.');
        }

        // Delete the associated images from the directory
        if ($blog->image1) {
            $image1Path = public_path($blog->image1);
            if (File::exists($image1Path)) {
                File::delete($image1Path);
            }
        }

        if ($blog->image2) {
            $image2Path = public_path($blog->image2);
            if (File::exists($image2Path)) {
                File::delete($image2Path);
            }
        }

        if ($blog->image3) {
            $image3Path = public_path($blog->image3);
            if (File::exists($image3Path)) {
                File::delete($image3Path);
            }
        }

        // Delete the blog entry
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }

    public function editblog($id){
        $blogs = Blog::find($id);
        return view('admin.blog.edit', compact('blogs'));
    }



// Update
        public function updateBlog(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'type' => 'required',
                
                'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $blog = Blog::findOrFail($id);
            $user = Auth::user();

            // Check if the logged-in user is the owner of the blog
            if ($blog->user_id !== $user->id) {
                return redirect()->back()->with('error', 'You are not authorized to update this blog.');
            }

            // Update blog title and content
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');
            $blog->type = $request->input('type');
            // Update image1
            if ($request->hasFile('image1')) {
                // Delete the previous image1 if it exists
                if ($blog->image1) {
                    $previousImagePath = public_path($blog->image1);
                    if (File::exists($previousImagePath)) {
                        File::delete($previousImagePath);
                    }
                }

                // Store the new image1 and update its path
                $image1 = $request->file('image1');
                $image1Path = 'images/blog/' . time() . '_image1.' . $image1->getClientOriginalExtension();
                $image1->move(public_path('images/blog/'), $image1Path);
                $blog->image1 = $image1Path;
            }

            // Update image2
            if ($request->hasFile('image2')) {
                // Delete the previous image2 if it exists
                if ($blog->image2) {
                    $previousImagePath = public_path($blog->image2);
                    if (File::exists($previousImagePath)) {
                        File::delete($previousImagePath);
                    }
                }

                // Store the new image2 and update its path
                $image2 = $request->file('image2');
                $image2Path = 'images/blog/' . time() . '_image2.' . $image2->getClientOriginalExtension();
                $image2->move(public_path('images/blog/'), $image2Path);
                $blog->image2 = $image2Path;
            }

            // Update image3
            if ($request->hasFile('image3')) {
                // Delete the previous image3 if it exists
                if ($blog->image3) {
                    $previousImagePath = public_path($blog->image3);
                    if (File::exists($previousImagePath)) {
                        File::delete($previousImagePath);
                    }
                }

                // Store the new image3 and update its path
                $image3 = $request->file('image3');
                $image3Path = 'images/blog/' . time() . '_image3.' . $image3->getClientOriginalExtension();
                $image3->move(public_path('images/blog/'), $image3Path);
                $blog->image3 = $image3Path;
            }

            // Save the updated blog
            $blog->save();

            return redirect()->route('blog')->with('success', 'Blog updated successfully.');
        }

// Read
        // Controller code
public function readBlog($id)
{
    $blog = Blog::findOrFail($id);
    $blogs = Blog::all();

    return view('pages.dynamic_blog', [
        'blog' => $blog,
        'blogs' => $blogs,
    ]);
}
}
