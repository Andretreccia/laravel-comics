@extends('layouts.app')


@section('content')
<div class="jumbotron">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbo image">
</div>
<div class="container">
    <div class="row py-5">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['title']}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection