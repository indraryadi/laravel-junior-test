<?php

namespace App\Http\Controllers;

use App\Models\companie;
use Illuminate\Http\Request;
use App\Http\Requests\CompanieRequest;

class CompanieController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=companie::all();
        return view('companie.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanieRequest $request)
    {

        $request->validated();
        $data=$request->all();
        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $savePath='images/';
            $logoName=date('Ymh')."_".$logo->getClientOriginalName();
            $logo->move($savePath,$logoName);
            $data['logo']=$logoName;
        }
        
        
        companie::create($data);
        return redirect()->route('companie.index')->withErrors($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(companie $companie)
    {
        //
        // return view('companie.show',compact('companie));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit(companie $companie)
    {
        return view('companie.edit',compact('companie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(CompanieRequest $request, companie $companie)
    {

        $request->validated();
        $data=$request->all();
        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $savePath='images/';
            $logoName=date('Ymh')."_".$logo->getClientOriginalName();
            $logo->move($savePath,$logoName);
            $data['logo']=$logoName;
        }else{
            unset($data['logo']);
        }
        
        $companie->update($data);
        return redirect()->route('companie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(companie $companie)
    {
        $companie->delete();
        return redirect()->route('companie.index');
    }
}
