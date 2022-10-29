@extends('content')

@section('cont')
    <div class="text-center text-dark bg-info rounded-pill" style="margin: 10px 38%">
        <h2>Loop rendering example :</h2>
    </div>
    @for ($i = 1; $i <= 11; $i++)
        <div class="text-center text-dark bg-info rounded-pill" style="margin: 30px 43%">
            <h3>Iterasi ke - {{$i}}</h3>
        </div>
    @endfor

@endsection
