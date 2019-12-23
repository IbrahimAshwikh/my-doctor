<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactt(){

        return view('contact-us');
  
      }
  
      public function storcontact()
       {
        request()->validate([
          'name' => 'required',
          'Email' => 'required',
          'Subject' => 'required',
          'Message' => 'required'
      ]);

             $contact=new Contact;
             $contact->name= request('name');
             $contact->Email= request('Email');
             $contact->Subject= request('Subject');
             $contact->Message= request('Message');
             $contact->save();
             return view("contact-us");
  
      }
}
