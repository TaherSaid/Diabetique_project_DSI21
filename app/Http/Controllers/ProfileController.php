<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $test = profile::where('user_id','=',Auth::user()->id)->get();
        // dd($test[0]->dateNaissance);
        return view('profile.profile', ['test' => $test]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new_profile_red(Request $request)
    {

        $prof=$request->all();
        $profile=new profile();
        $profile->user_id=$request->user;
        $profile->dateNaissance=$request->dateN;
        $profile->description=$request->description;
        $profile->etat=$request->etat;
        $profile->image=$request->image;
        $profile->etreDiabetique='0';
        $profile->save();
        return redirect("/pass_test");
    }

    //

    public function new_profile()
    {
        return view('profile.createProfile');
    }

    //

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
