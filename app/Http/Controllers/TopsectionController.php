<?php

namespace App\Http\Controllers;

use App\Models\Topsection;
use Illuminate\Http\Request;

class TopsectionController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.muster');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'logo' => 'required:',
        
        'greetings' => 'required',
        'quatation' => 'required',

    ]);
  
      $topsection=new Topsection;
      
      $topsection->greetings=$request->greetings;
      $topsection->quatation=$request->quatation;
      if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
       
        $image->move($destinationPath, $name);
          $topsection->logo=$request->logo;
    }
    
      //dd($topsection);
      $topsection->save();
      session()->flash('message', 'Successfully Save Your Information.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topsection  $topsection
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //echo "string";
        return view('admin.top_list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topsection  $topsection
     * @return \Illuminate\Http\Response
     */
    public function edit(Topsection $topsection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topsection  $topsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topsection $topsection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topsection  $topsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topsection $topsection)
    {
        //
    }
}
