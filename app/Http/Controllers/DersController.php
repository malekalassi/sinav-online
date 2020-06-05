<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class DersController extends Controller
{
    public function index()
    {
        $derses = Lesson::all();

        // dump($derses);

        return view('Sinav.index')->with(['derses'=>$derses]);
    }

    public function show($id){
        // return $id;
        $lesson = Lesson::where('id' ,$id)->get();
        return view('Sinav.show' , compact('lesson' ));
    }

}
