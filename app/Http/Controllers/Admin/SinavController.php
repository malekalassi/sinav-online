<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Question;
use Illuminate\Http\Request;


class SinavController extends Controller
{
    public function index(Lesson $lesson){
        // return $lesson;
        $lesson_id = $lesson->id ;
        $questions =Question::where('lesson_id'  ,$lesson_id)->get();
        // return $questions;
        return view('admin.sinav.index')->with(['lesson'=>$lesson ,'questions'=>$questions]);
    }
    public function store(Request $request)
    {
        // return $request;
        $question = new Question();

        $question->lesson_id= $request->input('lesson_id');
        $question->body = $request->input('soru');
        $question->answer_1 =  $request->input('a-sikki');
        $question->answer_2 =  $request->input('b-sikki');
        $question->answer_3 =  $request->input('c-sikki');
        $question->answer_4 =  $request->input('d-sikki');
        $question->correct =  $request->input('radio');
        $question->save();

        return Redirect()->back();
    }
    public function delete($question){
        // return $question;
        Question::destroy($question);

        return redirect()->back();

    }
    public function remove(Lesson $sinav){

         $sinav->questions()->delete();
         $sinav->delete();
         return redirect()->back();

    }
    public function create(){
        // return 1 ;
        return view('admin.sinav.create');
    }

}

