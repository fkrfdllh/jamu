@extends('layouts.root')

@section('title') Profil {{ auth()->user()->name }} @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&family=Montserrat:wght@500&family=Galada&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card-panel">
                    <h3 class="center" style="font-family: 'YellowTail', cursive;">Profil</h3>

                    <div class="section">
                        <div class="row">
                            <div class="valign-wrapper">
                                <div class="col s4 offset-s1 center-align">
                                    <h5 style="font-family: 'YellowTail', cursive;">Nama Lengkap</h5>
                                </div>
                                <div class="col s6 pull-s1">
                                    <h6>{{ auth()->user()->name }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="valign-wrapper">
                                <div class="col s4 offset-s1 center-align">
                                    <h5 style="font-family: 'YellowTail', cursive;">Email</h5>
                                </div>
                                <div class="col s6 pull-s1">
                                    <h6>{{ auth()->user()->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="valign-wrapper">
                                <div class="col s4 offset-s1 center-align">
                                    <h5 style="font-family: 'YellowTail', cursive;">Alamat</h5>
                                </div>
                                <div class="col s6 pull-s1">
                                    <h6>{{ auth()->user()->address }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section">
                        <form method="POST" action="{{ route('logout') }}" class="card-action row">
                            @csrf
                            <button type="submit" class="btn waves-effect waves-light red hoverable col s8 offset-s2">Keluar <i class="material-icons right">exit_to_app</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection