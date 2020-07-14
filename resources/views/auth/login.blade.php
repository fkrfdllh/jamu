@extends('layouts.root')

@section('title')
    Login
@endsection

@section('css')
    <style>
        .main {
            height: 90.4vh;
            position: absolute;
        } 

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }
    </style>
@endsection

@section('content')
    <div class="main flex-center position-ref">
            <div class="container">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s4 offset-s1">
                                        <span class="card-title"><b>Login</b></span>
                                    </div>
                                </div>

                                <div class="divider"></div>
                                
                                <div class="section">
                                    <div class="row">
                                        <form method="POST" action="{{ route('login') }}" class="col s12">
                                            @csrf
                                            <div class="row">
                                                <div class="valign-wrapper">
                                                    <div class="input-field col s2">
                                                        <span>E-mail</span>
                                                    </div>
                                                    <div class="input-field col s8 pull-s1">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                                                        @error('email')
                                                            <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="valign-wrapper">
                                                    <div class="input-field col s2">
                                                        <span>Password</span>
                                                    </div>
                                                    <div class="input-field col s8 pull-s1">
                                                        <label for="password">Password</label>
                                                        <input type="password" id="password" name="password" class="validate" required>
                                                        @error('password')
                                                            <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col offset-s8">
                                                    <button class="btn waves-effect waves-light indigo darken-1" type="submit">Login
                                                        <i class="material-icons right">send</i>
                                                    </button>
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
    </div>
@endsection