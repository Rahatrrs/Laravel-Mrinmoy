<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\ContactInfo;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function sendMessage(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully');
    }
    public function userMessage(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function deleteMessage($id){
        $delete = Contact::find($id)->forceDelete();
        return redirect()->back()->with('success', 'Message deleted successfully');

    }
    public function contactInfo(){
        $infos = ContactInfo::latest()->get();

        return view('admin.info.index' , compact('infos'));
    }



    // Information
    public function addInfo(Request $request){
        $validatedData = $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            
        ]);

        ContactInfo::insert([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Info added successfully');

    }


    public function editInfo($id){
        $infos = ContactInfo::find($id);
        return view('admin.info.edit' , compact('infos'));

    }

    public function updateInfo(Request $request, $id){
        $validatedData = $request->validate([
            'address' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            
        ]);

        ContactInfo::find($id)->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return redirect()->route('contact.information')->with('success', 'Info updated successfully');

    }




    // Newsletter
    public function newsLetter(Request $request ){
        $validatedData = $request->validate([
            
            'email' => 'required|email',  
        ]);
        NewsLetter::insert([
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'NewsLetter Sign Up Completed Successfully');

    }
    public function allNewsLetter(){
        $emails = NewsLetter::latest()->get();
        return view('admin.newsletter.index', compact('emails'));
    }

    public function deleteNewsLetter($id){
        $delete = NewsLetter::find($id)->forceDelete();

        return redirect()->back()->with('success', 'NewsLetter Deleted Successfully');
        
    }

}
