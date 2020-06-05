<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index($lessonId){

        $lesson =Lesson::with('questions')->find($lessonId);


       return view('questions.index' , compact('lesson'));
    }

    public function getValue(Request $request ,$lessonId){
        $correctArray=[];
        $lesson =Lesson::with('questions')->find($lessonId);
        $question = $lesson->questions;

       $questions = $lesson->questions->pluck('id')->toArray();
       $countQuestion = count($questions);



     for ($i=0 ;$i<count($question);$i++){

         if ($request->input($questions[$i]) == $question[$i]->correct){
             array_push($correctArray ,$question[$i]->id );
         }

     }
        $net = (100 / $countQuestion) * count($correctArray);

        $state = ($net >= 50) ? "Geçti" : "Kaldı";
    //  return $correctArray;
// return $net;
            DB::insert('insert into lesson_user (lesson_id,user_id,state, result) values (?, ? , ? , ?)', [$lessonId, Auth::user()->id, $state, $net]);

     return view('questions.correct' , $lesson)->with(
         ['lesson'=>$lesson ,
         'countQuestion' => $countQuestion ,
         'countCorrectQuestions'=>count($correctArray)
         ]);


    }
}
