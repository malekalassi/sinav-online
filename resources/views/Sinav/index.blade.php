@extends('layouts.app')

@section('content')
    <div class="container bg-dark text-white">
        <div class="row p-0">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="font-italic "> Sinavlar</div>
            </div>
        </div>
    </div>
{{--    card--}}
    <div class=" container">
        <div class="row">
            @foreach($derses as $ders)
                <a href="{{route('sinavlar.show' , ['id'=>$ders->id])}}" class="">
                    <div class="col-xs-4 mt-4 col-sm-8 col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="images/01.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" style="text-decoration:none;font-size: 20px;color:black !important;">{{$ders->name}}</a></h4>
                                <div class="row justify-content-end">
                                    <div class="col-md-12 " style="font-size: 15px;">{{$ders->user->name}}</div>
                                    {{--                            <div class="col-md-6"> <a href="#" class="btn btn-danger">Kaldınız</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection
