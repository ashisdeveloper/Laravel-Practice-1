<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;
class ContactsController extends Controller
{
    public function addContact(){
    	return view('add-contact');
    }
    public function allContacts(){
        // $contacts = DB::table('contacts')->get();
        $contacts = Contact::all();
        return view('all-contacts')->with('all_contacts', $contacts);
    }
    public function deleteContact($id){
        // $del = DB::table('contacts')->where('id',$id)->delete();
        $del = Contact::find($id)->delete();
        if ($del) {
            $notification = array(
                'message' => 'Contact deleted successfully',
                'alert-type' => 'success'
            );
            // return redirect()->route('all-contact')->with($notification);
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Error!',
                'alert-type' => 'error'
            );
            // return redirect()->back()->with($notification);
            return route('all.contact')->with($notification);
        }
    }
    public function insertContact(Request $request){
        //Query Builder Method
    	/*$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$st = DB::table('contacts') -> insert($data);*/

        //Eloquent Method
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->save();
    	if ($contact->save()) {
    		$notification = array(
                'message' => 'Contact added successfully',
                'alert-type' => 'success'
            );
            // return redirect()->route('all-contact')->with($notification);
            return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
                'message' => 'Error!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
    	}
    }
}
