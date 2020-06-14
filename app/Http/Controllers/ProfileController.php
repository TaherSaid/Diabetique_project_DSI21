<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

        $post=DB::table('posts')->get();
        return view("profile.profile",["post" => $post]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new_profile_red(Request $request)
    {
// dd($request->file('image'));
        $cover = $request->file('image_profile');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $prof=$request->all();
        $profile=new profile();
        $profile->user_id=$request->user;
        $profile->dateNaissance=$request->dateN;
        $profile->description=$request->description;
        $profile->etat=$request->etat;
        $profile->image=$cover->getFilename().'.'.$extension;
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
