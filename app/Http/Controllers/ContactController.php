<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
//use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    function send()
    {
       $data = array('name'=>"Virat Gandhi");
   Mail::to('tuhinmainuddin@gmail.com')->send(new SendMail($data));
      /*Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('tuhinmainuddin@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('tuhincse20@gmail.com','Virat Gandhi');
      });*/

      echo "Basic Email Sent. Check your inbox.";


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  dd($request->all());*/
      $request->validate([
        'name' => 'required:',
        'email' => 'required',
        'phone' => 'required',
        'description' => 'required',

    ]);

      $contact=new Contact;
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->phone=$request->phone;
      $contact->description=$request->description;
      /*dd($contact);*/
      $contact->save();
      session()->flash('message', 'Successfully Save Your Information.');
      
      if($contact->save()){
          $mailData = [
            'title' => 'Mail from anhenterprise.com',
            
        ];
          Mail::to('tuhin@raybangladesh.com')->send(new SendMail($mailData));
      }
     /* $data = array('name'=>"Virat Gandhi");

      Mail::send(['text'=>'mail'], $data, function($message) {
       $message->to('tuhinmainuddin@gmail.com', 'Mail Testing')->subject
       (' Basic Testing Mail');
       $message->from('tuhincse20@gmail.com','Tuhin');
   });*/
      echo "Basic Email Sent. Check your inbox.";
      return redirect()->back();
  }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
