@extends('layouts.default')

@section('title', 'Contact')

@section('style')
    .full-height {
    height: 77.15vh;
    }

    .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
    }

@endsection

@section('content')

    <img src="{{ env('URL_UPLOAD').$post['url_image'] }}" alt="">

@endsection
