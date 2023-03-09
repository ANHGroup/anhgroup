<?php

namespace App\Http\Controllers;

use App\Models\Copmpany;
use Illuminate\Http\Request;

class CopmpanyController extends Controller
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
        return view('backend.admin.pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Copmpany = new Copmpany;
        $Copmpany->title = $request->title;
        $Copmpany->description = $request->description;
        $Copmpany->link = $request->link;

        //$career->job_details = $request->job_details;

        $logo = time() . '.' . request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('logo'), $logo);
        $Copmpany->logo = $logo;

        //dd($Copmpany);
        $Copmpany->save();

        session()->flash('message', 'Successfully Save Your Information.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Copmpany  $copmpany
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $companies = Copmpany::all();
        return view('backend.admin.pages.company.list', compact('companies'));
    }

    public function website()
    {
        $companies = Copmpany::all();
        return view('frontend.pages.home', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Copmpany  $copmpany
     * @return \Illuminate\Http\Response
     */
    public function edit(Copmpany $copmpany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Copmpany  $copmpany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Copmpany $copmpany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Copmpany  $copmpany
     * @return \Illuminate\Http\Response
     */
    public function destroy(Copmpany $copmpany)
    {
        //
    }
}
