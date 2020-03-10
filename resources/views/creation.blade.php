@extends('layouts.default')

@section('title', 'Creation')

@section('style')
    .full-height {
        height: 93vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    html, body {
        overflow : visible;
    }
@endsection

@section('content')
    <div class="container full-height flex-center">
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégorie
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Eurogame</a>
                <a class="dropdown-item" href="#">Multi Game</a>
                <a class="dropdown-item" href="#">Separated link</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Pixel</a>
                <a class="dropdown-item" href="#">Retro</a>
                <a class="dropdown-item" href="#">Neon</a>
                <a class="dropdown-item" href="#">Moderne</a>
            </div>
        </div>

    </div>
@endsection