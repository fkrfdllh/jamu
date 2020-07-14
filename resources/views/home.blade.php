@extends('layouts.root')

@section('title') Resep Jamu Tradisonal @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&family=Montserrat:wght@600&family=Galada&display=swap" rel="stylesheet">
@endsection

@section('content')
    @if (count($images) > 0)
        <div class="slider">
            <ul class="slides">
                @foreach ($images as $image)
                    <li>
                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}">
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="slider">
            <ul class="slides">
                <li><img src="{{ asset('images/slider-1.jpg') }}" alt="Slider 1"></li>
                <li><img src="{{ asset('images/slider-2.jpg') }}" alt="Slider 2"></li>
                <li><img src="{{ asset('images/slider-3.jpg') }}" alt="Slider 3"></li>
            </ul>
        </div>
    @endif

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <div class="center-align">
                        <h4 style="font-family: 'Montserrat', sans-serif;">Selamat Datang</h4>
                        <h4 style="font-family: 'Montserrat', sans-serif;">di</h4>
                        <h3 style="font-family: 'YellowTail', cursive;"><strong>Resep Jamu Tradisional</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
