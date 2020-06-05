@extends('layouts.app')
@section('content')

<div class="container">
    <div class="btn btn-dark w-100 p-2 m-2">Sinavlarin durumlari</div>
    <div class="row">

        @foreach ($lessons as $lesson)
        <div class="col-4">
            <?php
            $tmp = \App\Lesson::find($lesson->lesson_id);
            ?>


            <div class="border border-primary d-flex justify-content-between p-1 m-2">
                <div class="">{{$tmp->name}}</div>
                <div> <button class="btn btn-{{ $lesson->state=='Geçti' ? 'success' : 'danger'}}">{{ $lesson->state }}</button></div>
            </div>


        </div>
        @endforeach


    </div>
</div>

@stop
