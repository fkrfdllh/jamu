@extends('layouts.root')

@section('title') List Jamu @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        @if (count($herbs) > 0)
            <div class="row">
                @foreach ($herbs as $herb)
                    <div class="col s3">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="{{ asset('storage/' . $herb->image) }}" alt="{{ $herb->name }}">
                            </div>
                            <div class="card-content">
                                <span class="card-title center-align">
                                    <strong>{{ $herb->name }}</strong>
                                </span>
                            </div>
                            <div class="card-action center-align">
                                <a href="{{ route('jamu.detail', $herb->id) }}" class="btn waves-effect waves-light indigo lighten-1 "><i class="material-icons left">info</i>Lihat Detil</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="section center-align">
                <h4 style="font-family: 'Montserrat', sans-serif;"><strong>Tidak ada data</strong></h4>
            </div>
        @endif
    </div>
@endsection