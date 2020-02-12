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
        margin-bottom: 100px;
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
        margin-bottom: 10px;
    }

    .button-to-creation {
        margin-bottom: 30px;
    }

    .button-down {
    position: relative;
    padding: 5px;
    margin: 30px auto;
    background: #fff;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    transition: all 0.2s linear;
    }

    .button-down:hover {
    transform: translate3d(0, 10px, 0);
    }

    .button-down::after {
    content: "";
    position: absolute;
    left: 12px;
    z-index: 11;
    display: block;
    width: 25px;
    height: 25px;
    border-top: 2px solid #000;
    border-left: 2px solid #000;
    }

    .button-down::after {
    top: 8px;
    transform: rotate(225deg);
    }

@endsection

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                ARCADIA
            </div>
            <div class="button-to-creation">
                <button type="button" class="btn btn-danger">Psssst, clique ici pour venir voir nos créations !</button>
            </div>

            <div class="sub-title">
                Entreprise de création de bornes d'arcade
            </div>
            <div class="button-down"></div>
        </div>
    </div>
@endsection
