@extends('layouts.default')

@section('title', 'Contact')

@section('style')
    .full-height {
    height: 77.15vh;
    }

    .flex-center {
    align-items: center;
    display: flex;
    }
@endsection

@section('content')
    <div class="full-height flex-center">
        <div class="container">
            <div class="row">
                <h1 style="margin: auto">Oops! Une Erreur est survenue</h1>
            </div>
            <div class="row">
                <h2 style="margin: auto">Le serveur a retourné une erreur {{ $statusCode }}.</h2>
            </div>
            <div class="row">
                @if($statusCode == 404)
                    <h2 style="margin: auto">{{ $statusText }}.</h2>
                @endif
            </div>
            <div class="row">
                <p style="margin: auto">
                    Quelque chose est cassé. Veuillez nous faire savoir ce que vous faisiez lorsque cette erreur s'est produite.
                    Nous la réparerons dès que possible. Nous sommes désolés pour la gêne occasionnée.
                </p>
            </div>
        </div>
    </div>
@endsection
