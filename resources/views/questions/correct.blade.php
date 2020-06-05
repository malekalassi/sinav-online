@extends('layouts.app')
@section('content')

<div class="jumbotron text-white p-1 mt-4 rounded-0 jumbotron-arkaplan jumbotron-arkaplan">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sinavBaslik jumbotron-baslik">Sınav Sonuçları</div>
        </div>
    </div>

</div>


<div class="container mt-4 table-responsive-md">
    @php
    $net = (100/$countQuestion)*$countCorrectQuestions;
    $state =$net >=50 ?'Geçti' :'Kaldı'
    @endphp

    <table class="table text-center table-borderless table-hover tabloBaslik">
        <thead>
            <tr>
                <th>Adı</th>
                <th>Soyadı</th>
                <th>Sınav Türü</th>
                <th>Toplam Soru</th>
                <th>Doğru</th>
                <th>Yanlış</th>
                <th>Net</th>
                <th>Durum</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()->surname }}</td>
                <td>{{ $lesson->name }} ({{ $lesson->type }})</td>
                <td>{{ $countQuestion }}</td>
                <td>{{ $countCorrectQuestions }}</td>
                <td>{{$countQuestion- $countCorrectQuestions }}</td>
                <td>{{ $net }}</td>
                @if ($state=='Geçti')
                <td><span class="text-white bg-success p-2 rounded">{{ $state }}</span></td>

                @else
                <td><span class="text-white bg-danger p-2 rounded">{{ $state }}</span></td>

                @endif
            </tr>
        </tbody>
    </table>

</div>


@stop
