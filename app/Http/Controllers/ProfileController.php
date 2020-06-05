<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $lessons = DB::select('select * from lesson_user where user_id = ?', [Auth::user()->id]);
        // return $lessons;


        return view('profile.index',compact('lessons'));

    }
}
