@extends('layouts.app')


@section('content')
<div class="jumbotron">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbo image">
</div>
<div class="container text-center">
    <div class="row py-5">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card text-center">
                <img src="{{$comic['thumb']}}" alt="" class="m-auto">
                <h4 class="text-uppercase">{{$comic['series']}}</h4>
            </div>
        </div>
        @endforeach
    </div>
    <button class="load-more text-center mb-5"> LOAD MORE</button>
</div>
<div class="shop_comics">
    <div class="container">
        <div class="row py-4">
            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>


@endsection