@extends('layouts.app')
@section('content')
<div class="jumbotron text-white p-1 mt-4 rounded-0 jumbotron-arkaplan">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sinavBaslik jumbotron-baslik">Sınav Oluştur</div>
        </div>
    </div>

</div>



<div class="container mt-4">
    <form action="{{ route('exam.store') }}" method="post">
        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" placeholder="Sınav Adı" name="sinav_adi" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" placeholder="Type" name="type" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control kutu px-3" placeholder="Time" name="time" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="description" class="form-control kutu px-3" name="desc" id="" cols="20"
                        rows="10"></textarea>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-9 col-lg-6 offset-xs-1 offset-sm-0 offset-md-2 offset-lg-3">
                <div class="form-group">

                    @csrf
                    <button type="submit" class="btn buton">Kaydet</button>


                </div>
    </form>
</div>
</div>

</div>
@stop
