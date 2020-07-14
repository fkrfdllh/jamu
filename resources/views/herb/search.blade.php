@extends('layouts.root')

@section('title') Pencarian @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <style>
        .full-height {
            height: 85vh;
        }
    </style>
@endsection

@section('content')
    <div class="valign-wrapper full-height">
        <div class="container">
            <div class="center-align">
                <div class="row">
                    <div class="col s12">
                        <h3 class="indigo-text lighten-1" style="font-family: 'YellowTail', cursive;">Resep Jamu Tradisional</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card">
                            <div class="card-content">
                                <form method="GET" action="{{ route('jamu.search') }}">
                                    <div class="row">
                                        <div class="input-field col s10 offset-s1">
                                            <input id="s" name="s" type="text" class="validate">
                                            <label for="s">Cari jamu di sini</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s4 offset-s4">
                                            <button class="btn btn-large blue darken-2 waves-effect waves-light" type="submit"><i class="material-icons right">search</i>Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection