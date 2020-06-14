<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\;
use App\post;
use App\profile;
use App\User;

class postController extends Controller
{
    public function index()
    {
        $post=post::all();
        return view("home",["post" => $post]);
    }

    public function add_post(Request $request)
    {
        $img=profile::where('user_id','=',Auth::user()->id)->get();
        // dd($img[0]->image);
        $req=$request->all();
        $post=new post();
        $post->user_id=$req['user'];
        $post->sujet=" ";
        $post->article=$req['article'];
        $post->image= $img[0]->image;
        $post->save();
        return redirect("/profille");
    }
    public function delete_post(Request $id)
    {
        post::find($id)->delete();
        return back();
    }
}
