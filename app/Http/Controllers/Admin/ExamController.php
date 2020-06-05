<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function store(Request $request){
        // return $request;
        $lesson = new Lesson();

        $lesson->user_id = Auth::user()->id;
        $lesson->name = $request->input('sinav_adi');
        $lesson->time = $request->input('time');
        $lesson->desc = $request->input('desc');
        $lesson->type = $request->input('type');

        $lesson->save();

        return redirect()->route('admin.home');
    }
}
