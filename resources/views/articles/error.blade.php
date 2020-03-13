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
                <h2 style="margin: auto">{{ $message }}</h2>
            </div>
        </div>
    </div>
@endsection
