@extends('layouts.root')

@section('title')
    Register
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s9 offset-s2">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s4 offset-s1">
                                <span class="card-title"><strong>Register</strong></span>
                            </div>
                        </div>

                        <div class="divider"></div>
                        
                        <div class="section">
                            <div class="row">
                                <form method="POST" action="{{ route('register') }}" class="col s12">
                                    @csrf
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Nama Lengkap</span>
                                            </div>
                                            <div class="input-field col s7 pull-s1">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" id="name" name="name" class="validate" value="{{ old('name') }}" required autofocus>
                                                @error('name')
                                                    <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>E-mail</span>
                                            </div>
                                            <div class="input-field col s7 pull-s1">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" class="validate" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Alamat</span>
                                            </div>
                                            <div class="input-field col s7 pull-s1">
                                                <label for="address">Alamat</label>
                                                <textarea class="materialize-textarea" name="address" id="address" required>{{ old('address') }}</textarea>
                                                @error('address')
                                                    <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Password</span>
                                            </div>
                                            <div class="input-field col s7 pull-s1">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" class="validate" required>
                                                @error('password')
                                                    <span class="helper-text" data-error="wrong">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Konfirmasi Password</span>
                                            </div>
                                            <div class="input-field col s7 pull-s1">
                                                <label for="password-confirm">Konfirmasi Password</label>
                                                <input type="password" id="password-confirm" name="password_confirmation" class="validate" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col offset-s8">
                                            <button class="btn waves-effect waves-light indigo darken-1" type="submit">Register
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
@endsection