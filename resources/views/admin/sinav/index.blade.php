@extends('layouts.app')
@section('content')

<div class="jumbotron text-white p-1 mt-4 rounded-0 jumbotron-arkaplan">

    <div class="container">
        <div class="row">
            <div class="col-md-6 sinavBaslik jumbotron-baslik">Sınav Düzenle</div>
        </div>
    </div>

</div>



<div class="container mt-4">
    <form action="{{ route('sinav.store') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $lesson->id }}" name="lesson_id">
        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" id="soru-numarasi" placeholder="Soru Numarası"
                        name="soru-numarasi" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <textarea rows="8" cols="50" class="form-control kutu px-3 rounded-lg" id="soru"
                        placeholder="Soru Ekle" name="soru" required>
                   </textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" id="a-sikki" placeholder="A - Şıkkı"
                        name="a-sikki" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" id="b-sikki" placeholder="B - Şıkkı"
                        name="b-sikki" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" id="c-sikki" placeholder="C - Şıkkı"
                        name="c-sikki" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" id="d-sikki" placeholder="D - Şıkkı"
                        name="d-sikki" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">

                <label class="kutus">A - Şıkkı
                    <input type="radio" value="1" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>

            </div>


            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">

                <label class="kutus">B - Şıkkı
                    <input type="radio" value="2" name="radio">
                    <span class="checkmark"></span>
                </label>

            </div>

            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">

                <label class="kutus">C - Şıkkı
                    <input type="radio" value="3" name="radio">
                    <span class="checkmark"></span>
                </label>

            </div>

            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">

                <label class="kutus">D - Şıkkı
                    <input type="radio" value="4" name="radio">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <button type="submit" class="btn buton">Soru Ekle</button>

                </div>
            </div>
        </div>
    </form>

</div>

<hr>


<!-- Soru 1 kutu -->

@foreach ($questions as $question)
<div class="container soruKutu">
    <div class="row">
        <div class="col-lg-10">

            <div class="soruNo d-flex justify-content-lg-between">
                <div>
                    <h3>Soru {{$loop->iteration}}</h3>
                </div>
                <form action="{{ route('question.store' , ['question'=>$question->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="col-lg-2 delete">
                        <button type="submit">
                            <div class="col-lg-2 delete">
                                <a href="#">X</a>
                            </div>
                        </button>
                    </div>
                </form>

            </div>
            <div class="soru">
                <p>
                    {{ $question->body }}
                </p>
            </div>
            <div class="secenekler">

                <form>
                    <label class="kutus">{{ $question->answer_1 }}
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="kutus">{{ $question->answer_2 }}
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="kutus">{{ $question->answer_3 }}
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="kutus">{{ $question->answer_4 }}
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>
        </div>

    </div>
</div>

@endforeach

<!-- Soru 1 kutu end -->


@stop
