<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributors = Distributor::all();

        // dd($distributor);
        return view('backend.website.pages.distributor_list', compact('distributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_distributor()
    {

        //echo "dsfd";
        return view('backend.admin.pages.distributor.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:8',
            'code' => 'required',
            'mobile' => 'required',
            'type' => 'required',
            'district' => 'required',
            'upozila' => 'required',
        ]);
        /*Distributor::create_distributor($request->all());*/
        $distributor = new Distributor;
        $distributor->name = $request->name;
        $distributor->code = $request->code;
        $distributor->mobile = $request->mobile;
        $distributor->type = $request->type;
        $distributor->district = $request->district;
        $distributor->upozila = $request->upozila;
        //dd($distributor);
        $distributor->save();

        session()->flash('message', 'Successfully Save Your Information.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function distributor_list()
    {
        $distributors = Distributor::all();

        // dd($distributor);
        return view('backend.admin.pages.distributor.list', compact('distributors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distributors_info = Distributor::find($id);
        return view('backend.admin.pages.distributor.edit', compact('distributors_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $distributor = Distributor::find($id);

        $distributor->name = $request->name;
        $distributor->code = $request->code;
        $distributor->mobile = $request->mobile;
        $distributor->type = $request->type;
        $distributor->district = $request->district;
        $distributor->upozila = $request->upozila;
        //dd($distributor);
        $distributor->save();

        session()->flash('message', 'Successfully Update Your Information.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function delete_distributor($id)
    {
        //dd($id);
        $distributor = Distributor::find($id);
        $distributor->delete();
        return redirect()->back();

    }

}
