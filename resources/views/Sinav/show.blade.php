@extends('layouts.app')
@section('content')

<div class="container">
    <div class="jumbotron bg-dark text-white p-1 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sinavBaslik text-center" style="font-size: 19px !important;">{{$lesson[0]->getNameTypeAttribute()}} Sınavı</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mt-2">
            <p><span style="color:#EB7350 !important;font-weight: bold !important;">Ders :</span> {{$lesson[0]->name}}</p>
            <p><span style="color:#EB7350 !important;font-weight: bold !important;">Hoca :</span> {{$lesson[0]->user->name}}</p>
            <p><span style="color:#EB7350 !important;font-weight: bold !important;">Seviye :</span> Orta</p>
            <p><span style="color:#EB7350 !important;font-weight: bold !important;">Süre / Dakika :</span> {{count($lesson[0]->questions)}} Soru / {{$lesson[0]->time}} Dakika</p>
            <p>
                {{$lesson[0]->desc}}
            </p>
            <a href="{{route('questions.index' , ['lessonId'=>$lesson[0]->id])}}" class="btn buton">Teste Başla</a>
        </div>
        <div class="col-md-5 mt-2 offset-md-2">
            <img class="responsive" src="images/01.png" width="100%" height="70%" alt="Card image cap">
        </div>
    </div>
</div>

    @stop
