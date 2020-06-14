<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class now_moreController extends Controller
{
    public function index()
    {
        $json = file_get_contents('json/now_more.json');
        $json_data = json_decode($json,true);
        return view('now_more', [
            'json' => $json_data
        ]);
    }
    public function update()
    {
        if( Auth::user()->role=='admin'){
        $json = file_get_contents('json/now_more.json');
        $json_data = json_decode($json,true);
        return view('admin.modifierNowMore', [
            'json' => $json_data
        ]);}else{return redirect('/');}

    }
    public function updateNowMore(Request $request)
    {
    if( Auth::user()->role=='admin'){
        $json = file_get_contents('json/now_more.json');
        $json_data = json_decode($json,true);
        // dd($request);
        $json_data["section_1"]["titre"]=$request['titre'];
        $json_data["section_1"]["description"]=$request['description'];
        $newJsonString = json_encode($json_data, JSON_PRETTY_PRINT);
        file_put_contents(base_path('public/json/now_more.json'), stripslashes($newJsonString));
        return back();}
        else{return redirect('/');}
    }
}
