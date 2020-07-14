@extends('layouts.root')

@section('title') Hasil Pencarian @endsection

@section('css')
    <style>
        .full-height {
            height: 90.4vh;
        }
    </style>
@endsection

@section('content')
    @if(count($herbs) > 0)
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6>Ditemukan {{ count($herbs) }} hasil pencarian dari "{{ request()->input('s') }}"</h6>
                </div>
            </div>
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
        </div>
    @else
        <div class="valign-wrapper full-height">
            <div class="row">
                <div class="col s12">
                    <h3>Maaf, "{{ request()->input('s') }}" tidak ditemukan</h3>
                </div>
            </div>
        </div>
    @endif
@endsection