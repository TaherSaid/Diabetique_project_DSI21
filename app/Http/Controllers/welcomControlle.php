<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class welcomControlle extends Controller
{
    public function index()
    {
        $json = file_get_contents('json/home_info.json');
        $json_data = json_decode($json,true);
        return view('welcome', [
            'json' => $json_data
        ]);
    }

    public function update(Request $request)
    {
        if( Auth::user()->role=='admin'){
        $json = file_get_contents('json/home_info.json');
        $json_data = json_decode($json,true);
        return view('admin.modifierhome', [
            'json' => $json_data
        ]);}else{return redirect('/');}

    }
    public function updateSection1(Request $request)
    {
        if( Auth::user()->role=='admin'){
        $json = file_get_contents('json/home_info.json');
        $json_data = json_decode($json,true);
        // dd($request);
        $json_data["section_1"]["titre"]=$request['titre1'];
        $json_data["section_1"]["description"]=$request['descriptionSection1'];
        $json_data["section_2"]["titre"]=$request['titre2'];
        $json_data["section_2"]["description"]=$request['descriptionSection2'];
        $json_data["our_service"]["num_1"]["titre"]=$request['serviceTitre1'];
        $json_data["our_service"]["num_1"]["description"]=$request['descriptionServiceSection1'];
        $json_data["our_service"]["num_2"]["titre"]=$request['serviceTitre2'];
        $json_data["our_service"]["num_2"]["description"]=$request['descriptionServiceSection2'];
        $json_data["our_service"]["num_3"]["titre"]=$request['serviceTitre3'];
        $json_data["our_service"]["num_3"]["description"]=$request['descriptionServiceSection3'];
        $json_data["our_service"]["num_4"]["titre"]=$request['serviceTitre4'];
        $json_data["our_service"]["num_4"]["description"]=$request['descriptionServiceSection4'];

        $newJsonString = json_encode($json_data, JSON_PRETTY_PRINT);
        file_put_contents(base_path('public/json/home_info.json'), stripslashes($newJsonString));
        return back();}
        else{return redirect('/');}
    }
}
