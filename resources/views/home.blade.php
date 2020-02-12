@extends('layouts.default')

@section('title', 'Home')

@section('style')
    .full-height {
    height: 94vh;
    }

    .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
    }

    .position-ref {
    position: relative;
    }

    .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
    }

    .content {
    text-align: center;
    }

    .title {
    color: #f05791;
    font-size: 84px;
    }

    .sub-title {
    color: #22b5fb;
    padding: 0 25px;
    font-size: 20px;
    font-weight: 550;
    letter-spacing: .1rem;
    }

    .m-b-md {
    margin-bottom: 30px;
    }

@endsection

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                ARCADIA
            </div>

            <div class="sub-title">
                Entreprise de création de bornes d'arcade
            </div>
        </div>
    </div>
@endsection
