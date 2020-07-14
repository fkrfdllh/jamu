@extends('layouts.root')

@section('title') Tambah Resep Jamu @endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&family=Montserrat:wght@500&family=Galada&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s10 offset-s1">
                    <div class="card">
                        <div class="card-content indigo-text darken-1">
                            <h4 class="center-align" style="font-family: 'Montserrat', sans-serif;"><strong>Tambah Jamu</strong></h4>
                        </div>
                        <div class="divider"></div>
                        <div class="card-content">
                            <div class="row">
                                <form method="POST" action="{{ route('jamu.create') }}" class="col s12" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Judul Resep</span>
                                            </div>
                                            <div class="input-field col s6 pull-s2">
                                                <input id="name" name="name" type="text" class="validate">
                                                <label for="name">Judul Resep</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Gambar</span>
                                            </div>
                                            <div class="file-field input-field col s6 pull-s2">
                                                <div class="btn right indigo lighten-1">
                                                    <span>telusuri</span>
                                                    <input type="file" accept="image/.jpeg, .jpg, .png" name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input id="image" name="image" type="text" class="file-path validate" placeholder="Gambar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="valign-wrapper">
                                            <div class="input-field col s3">
                                                <span>Deskripsi</span>
                                            </div>
                                            <div class="input-field col s6 pull-s2">
                                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                                <label for="description">Deskripsi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ingredient">
                                        <div class="row">
                                            <div class="valign-wrapper">
                                                <div class="input-field col s3">
                                                    <span>Bahan-Bahan</span>
                                                </div>
                                                <div class="input-field col s6 pull-s2">
                                                    <input id="ingredient" name="ingredient[]" type="text" class="validate">
                                                    <label for="ingredient">Bahan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6 offset-s7">
                                            <a id="addIngredient" class="waves-effect waves-indigo btn-flat"><i class="material-icons left">add</i>Tambah bahan</a>
                                        </div>
                                    </div>
                                    <div class="step">
                                        <div class="row">
                                            <div class="valign-wrapper">
                                                <div class="input-field col s3">
                                                    <span>Langkah-Langkah</span>
                                                </div>
                                                <div class="input-field col s6 pull-s2">
                                                    <input id="step" name="step[]" type="text" class="validate">
                                                    <label for="step">Langkah</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6 offset-s7">
                                            <a id="addStep" class="waves-effect waves-indigo btn-flat"><i class="material-icons left">add</i>Tambah langkah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button class="btn-large waves-effect waves-light indigo lighten-1 col s10 offset-s1" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#addIngredient").on('click', function() {
            var input = '<div class="row">' + '<div class="input-field col s6 offset-s4">' + '<input id="ingredient" name="ingredient[]" type="text" class="validate">' + '<label for="ingredient">Bahan</label>' + '</div>' + '<div class="input-field col s1">' + '<a id="remove" class="btn btn-floating waves-effect waves-light red">' + '<span><i class="material-icons">cancel</i></span>' + '</a>' + '</div>' + '</div>'
            $(".ingredient").append(input);
        });

        $("#addStep").on('click', function() {
            var input = '<div class="row">' + '<div class="input-field col s6 offset-s4">' + '<input id="step" name="step[]" type="text" class="validate">' + '<label for="step">Langkah</label>' + '</div>' + '<div class="input-field col s1">' + '<a id="remove" class="btn btn-floating waves-effect waves-light red">' + '<span><i class="material-icons">cancel</i></span>' + '</a>' + '</div>' + '</div>'
            $(".step").append(input);
        });

        $('body').on('click', 'a#remove', function() {
            $(this).parent().parent().remove();
        });
    </script>
@endsection