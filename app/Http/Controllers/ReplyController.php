<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \App\Models\Blog;
use \App\Models\Reply;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function sendReply(Request $request, $id){
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Create a new reply record and save it to the database
    $reply = new Reply();
    $reply->blog_id = $id; // Assign the passed ID to the blog_id column
    $reply->name = $validatedData['name'];
    $reply->email = $validatedData['email'];
    $reply->message = $validatedData['message'];
    $reply->created_at = Carbon::now();

    $reply->save();

    // Perform any additional actions, such as sending an email or redirecting to another page

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Reply submitted successfully');
    }


    public function allReply(){
        $replies = Reply::all();
        return view('admin.reply.index', compact('replies'));
    }
    public function deleteReply($id){
        $delete = Reply::find($id)->forceDelete();
        return redirect()->back()->with('success', 'Reply deleted successfully');

    }
    
}
