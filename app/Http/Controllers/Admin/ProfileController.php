<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $exams =Lesson::where('user_id' , Auth::user()->id)->get();
        // return $exams ;
        return view('admin.profile')->with(['exams'=>$exams]);
    }
}
