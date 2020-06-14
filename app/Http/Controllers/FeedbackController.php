<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $req=$request->all();
        $post=new feedback();
        $post->name=$req['name'];
        $post->email=$req['email'];
        $post->feedback_type=$req['feedback_type'];
        $post->message=$req['message'];
        $post->save();
        return redirect("/")->with('message',"True");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback){
    if( Auth::user()->role=='admin'){
        $feedbacks=feedback::all();
        // dd($feedback->id);
        return view("admin.allfeedback",["feedbacks" => $feedbacks]);
    }else{return redirect('/');}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feedback  $feedback
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        if( Auth::user()->role=='admin'){
            feedback::find($id)->delete();
            return back();
        }else{return redirect('/');}

    }

}
