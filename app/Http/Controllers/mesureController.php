<?php

namespace App\Http\Controllers;

use App\mesure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesure=mesure::where('mesure_user_id','=',Auth::user()->id)->get();
        $array[] = ['date', 'mesure'];
        foreach ($mesure as $key => $val) {
            $array[++$key]=[$val->dateMesure,$val->val,];
        }
        return view("mesure")->with("mesure", $mesure)->with("tab",json_encode($array));
    }

    public function addmesure(){

        return view('addmesure');

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
        // dd($request);
        $m=new mesure();
        $m->val=$request->value;
        $m->dateMesure=$request->date;
        $m->mesure_user_id=$request->user;
        $m->save();
        return redirect('/allmesure');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function show(mesure $mesure)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function edit(mesure $mesure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mesure $mesure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function destroy(mesure $mesure)
    {
        //
    }
}
