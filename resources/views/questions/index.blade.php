@extends('layouts.app')
@section('content')
<div class="container section">
    <form  action="{{route('test.getvalue',['lessonId' =>$lesson->id])}}" method="post">
        @csrf
    @foreach($lesson->questions as $question)
        <h1>Soru {{$loop->iteration}}</h1>
        <hr style="margin-bottom: 20px">
        <div class="font-weight-bolder" id="question">-{{$question->body}}</div>


            <div class="mt-2 col-md-12">
            <fieldset class="form-group pl-3" style="color: #2a9055" id="{{$question -> id}}">
                <label><input  type="radio" value="1" name="{{$question -> id}}" >{{$question -> body}}</label><br>
                <label><input  type="radio" value="2" name="{{$question -> id}}" >{{$question -> body}}</label><br>
                <label><input  type="radio" value="3" name="{{$question -> id}}" >{{$question -> body}}</label><br>
                <label><input  type="radio" value="4" name="{{$question -> id}}" >{{$question -> body}}</label><br>
            </fieldset>
            </div>
    @endforeach

        <button type="submit" class="btn alert-primary w-100"> Check answer</button>
    </form>
</div>

    @stop

    {{-- <div class="container section">
        <div id="quiz">
            <h1>Sorular</h1>

            <hr style="margin-bottom: 20px">

            <p id="question"></p>

            <div class="button-grp">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
            </div>

            <hr style="margin-top: 50px">

            <footer>
                <p id="progress">Question x of y</p>
            </footer>
        </div>
    </div> --}}
