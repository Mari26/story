<?php

namespace App\Http\Controllers;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants=Consultant::all();
        return view('pages.consultants.index',compact('consultants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.consultants.create');
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
            'name'=>'required',
        ]);
        Consultant::create($request->all());
        return redirect()->route(consultants.index)->with('success','Provider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consultant $consultant)
    {
        return view('pages.consultants.show',compact('consultant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $consultant)
    {
        return view('pages.consultants.edit',compact('consultant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultant $consultant)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $consultant->update($request->all());
        return redirect()->route('consultants.index')->with('success','consultants updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultant $consultant)
    {
        $consultant->delete();
        return return redirect()->route('consultans.index')
        ->with('success','consultant deleted successfully');
    }
}
