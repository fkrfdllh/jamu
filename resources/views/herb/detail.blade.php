@extends('layouts.root')

@section('title') {{ $herb->name }} @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&family=Montserrat:wght@500&family=Galada&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="card">
                <div class="card-content indigo-text darken-1">
                    <h3 class="center-align" style="font-family: 'Montserrat', sans-serif;"><strong>{{ $herb->name }}</strong></h3>
                </div>
                <div class="card-image" style="align-items: center; display: flex; justify-content: center;">
                    <img class="center" src="{{ asset('storage/' . $herb->image) }}" style="width: auto; max-height: 350px;">
                </div>
                <div class="card-content">
                    @if ($herb->description != null)
                        <div class="section">
                            <ul class="collection with-header hoverable">
                                <li class="collection-header center-align indigo darken-1 white-text"><h4 style="font-family: 'YellowTail', cursive;">Deskripsi</h4></li>
                                <li class="collection-item"><h6 style="font-family: 'Montserrat', sans-serif;">{{ $herb->description }}</h6></li>
                            </ul>
                        </div>
                    @endif
                    <div class="section">
                        <ul class="collection with-header hoverable">
                            <li class="collection-header center-align indigo darken-1 white-text"><h4 style="font-family: 'YellowTail', cursive;">Bahan-Bahan</h4></li>
                            <li class="collection-item">
                                <table class="highlight">
                                    {{-- <thead>
                                        <tr>
                                            <th style="font-family: 'Montserrat', sans-serif;">No.</th>
                                            <th style="font-family: 'Montserrat', sans-serif;">Bahan</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        @foreach ($ingredient as $i => $item)
                                        <tr>
                                            <td style="font-family: 'Montserrat', sans-serif;">{{ $i + 1 }}.</td>
                                            <td style="font-family: 'Montserrat', sans-serif;">{{ $item->ingredient }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                    <div class="section">
                        <ul class="collection with-header hoverable">
                            <li class="collection-header center-align indigo darken-1 white-text"><h4 style="font-family: 'YellowTail', cursive;">Langkah-Langkah</h4></li>
                            <li class="collection-item">
                                <table border="10">
                                    {{-- <thead>
                                        <tr>
                                            <th style="font-family: 'Montserrat', sans-serif;">No.</th>
                                            <th style="font-family: 'Montserrat', sans-serif;">Langkah</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        @foreach ($step as $i => $item)
                                        <tr>
                                            <td style="font-family: 'Montserrat', sans-serif;">{{ $i + 1 }}.</td>
                                            <td style="font-family: 'Montserrat', sans-serif;">{{ $item->step }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection