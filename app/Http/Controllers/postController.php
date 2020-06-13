<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\post;
class postController extends Controller
{
    public function index()
    {
        $post=post::all();
        return view("home",["post" => $post]);
    }

    public function add_post(Request $request)
    {
        $p=$request->all();
        $post=new post();
        $post->user_id=$p->user_id;
        // $post->sujet=$p->sujet;
        $post->article=$p->article;
        // $post->image=$p->image;
        $post->save();
        return back();
    }
    public function delete_post(Request $id)
    {
        post::find($id)->delete();
        return back();
    }
}
