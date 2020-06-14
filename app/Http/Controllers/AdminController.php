<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\profile;
use App\feedback;
use Illuminate\Http\Request;
use Closure;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function index()
    {
        if( Auth::user()->role=='admin'){
        $count_profile=profile::all()->count();
        $count_feedback=feedback::all()->count();
        $profile=profile::all();
        $array[] = ['num', 'created at'];
        foreach ($profile as $key => $val) {
            $array[++$key]=[$val->created_at,$key];
        }
        // dd($array);
        return view('admin.homeDashboard')
        ->with('count_profile',$count_profile)
        ->with('count_feedback',$count_feedback)
        ->with("tab",json_encode($array));}
        else{
            return redirect('/');
        }
    }
}
