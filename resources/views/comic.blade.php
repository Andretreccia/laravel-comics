@extends('layouts.app')


@section('content')
<img src="{{$comic['thumb']}}" alt="">
<div class="container d-flex">
    <div class="col-6">
        <h2>{{$comic['title']}}</h2>
        <div>
            <div>U.S. Price: <span>{{$comic['price']}}</span></div>
            <div>Check Availability</div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="col-6">
        <div>Advertisment</div>
        <img src="{{asset('img/adv.jpg')}}" alt="">
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="col-6">
            <h6>Talent</h6>
            <div>
                <div>Art by:</div>
                @foreach ($comic['artists'] as $artist)
                <a href="">{{$artist}}</a>
                @endforeach
            </div>
            <div>
                <div>Written by:</div>
                @foreach ($comic['writers'] as $writer)
                <a href="">{{$writer}}</a>
                @endforeach
            </div>

        </div>
        <div class="col-6">
            <div>
                <div>
                    Series:
                </div>
                <div>
                    {{$comic['series']}}
                </div>
            </div>
            <div>
                <div>
                    U.S. Price:
                </div>
                <div>
                    {{$comic['price']}}
                </div>
            </div>
            <div>
                <div>
                    On Sale Date:
                </div>
                <div>
                    {{$comic['sale_date']}}
                </div>
            </div>



        </div>
    </div>
</div>




@endsection