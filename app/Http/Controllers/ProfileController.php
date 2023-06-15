<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \App\Models\User;
use Auth;
class ProfileController extends Controller
{
    // Profile Update
    public function userProfile(){
        if (Auth::user()){
            $user =User::find(Auth::id());
            if ($user) {
                return view('admin.pages.profile', compact('user'));
            }
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update user information
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Handle profile photo upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Delete previous image if it exists
            if ($user->profile_photo_path && Storage::exists('public/' . $user->profile_photo_path)) {
                Storage::delete('public/' . $user->profile_photo_path);
            }
    
            $image->storeAs('public/profile-photos', $imageName);
    
            $user->profile_photo_path = 'profile-photos/' . $imageName;
        }
    
        $user->save();
    
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }

    public function removePicture(){
        $user = Auth::user();

        // Delete previous image if it exists
        if ($user->profile_photo_path && Storage::exists('public/' . $user->profile_photo_path)) {
            Storage::delete('public/' . $user->profile_photo_path);
            $user->profile_photo_path = null;
            $user->save();
            return redirect()->route('user.profile')->with('success', 'Profile picture removed successfully');
        } else {
            return redirect()->route('user.profile')->with('error', 'No profile picture found');
        }
    }









    // Change Password
    public function changePassword(){
        return view('admin.pages.change_password');
    }



    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('success', 'Password Is Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Current Password Is Not Valid');
        }
    }
}
