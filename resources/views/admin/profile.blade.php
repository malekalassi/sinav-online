@extends('layouts.app')
@section('content')

<div class="jumbotron text-white p-1 mt-4 rounded-0 jumbotron-arkaplan">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sinavBaslik jumbotron-baslik">Sınavlar (Hoca controlu)</div>
        </div>
    </div>

</div>



<div class="container mt-4">
    <div class="row tabloBaslik">

        @foreach ($exams as $exam)
        <div class="col-xs-3 col-sm-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $exam->name  }} sinavi ({{ $exam->type }})</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12"><a href="{{ Route('sinav.index' , ['lesson' => $exam->id]) }}"
                        class="btn btn-warning w-100 text-white">Düzenle</a></div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12 w-100">
                    <form action="{{ route('exam.remove' ,['sinav' => $exam->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="w-100 p-0 border-0"><a
                                class="btn btn-danger w-100 text-white">Sil</a></button>
                    </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 w-100">
                    <form action="{{ route('exam.remove' ,['sinav' => $exam->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="w-100 p-0 border-0"><a class="btn btn-success w-100 text-white">sinav sonuçlari</a></button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@stop
