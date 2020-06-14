<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\;
use App\post;
use App\User;

class postController extends Controller
{
    public function index()
    {
        $post=post::all();
        dd($post);
        // return view("home",["post" => $post]);
    }

    public function add_post(Request $request)
    {
        $req=$request->all();
        $post=new post();
        $post->user_id=$req['user'];
        $post->sujet=" ";
        $post->article=$req['article'];
        $post->image=" ";
        $post->save();
        return back();
    }
    public function delete_post(Request $id)
    {
        post::find($id)->delete();
        return back();
    }
}
