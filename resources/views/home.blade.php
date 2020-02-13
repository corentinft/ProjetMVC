@extends('layouts.default')

@section('title', 'Home')

@section('style')

    body {
        background-color: #000000;
        background-image:url({{url('images/borne.jpg')}});
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
    }

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
        margin-left: 55px;
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
        top: 8px;
        transform: rotate(225deg);
    }

    #section02 {
        height: 1000px;
        background-color: rgba(0,0,0,0.8);
    }

    .content2 {
        text-align: left;
        margin-right: 350px;
    }

    .p {
        width: 600px;
        color: #22b5fb;
    }

    .demo a {
        position: absolute;
        bottom: 20px;
        left: 50%;
        z-index: 2;
        display: inline-block;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        color: #fff;
        font : normal 400 20px/1 'Josefin Sans', sans-serif;
        letter-spacing: .1em;
        text-decoration: none;
        transition: opacity .3s;
    }
    .demo a:hover {
        opacity: .5;
    }

    #button01 a {
        padding-top: 80px;
    }
    #button01 a span {
        position: absolute;
        top: 0;
        left: 50%;
        width: 24px;
        height: 24px;
        margin-left: -12px;
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: sdb07 2s infinite;
        animation: sdb07 2s infinite;
        opacity: 0;
        box-sizing: border-box;
    }
    #button01 a span:nth-of-type(1) {
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
    }
    #button01 a span:nth-of-type(2) {
        top: 16px;
        -webkit-animation-delay: .15s;
        animation-delay: .15s;
    }
    #button01 a span:nth-of-type(3) {
        top: 32px;
        -webkit-animation-delay: .3s;
        animation-delay: .3s;
    }
    @-webkit-keyframes sdb07 {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
        }
        @keyframes sdb07 {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    #button02 a {
    padding-top: 80px;
    }
    #button02 a span {
        position: absolute;
        top: 0;
        left: 50%;
        width: 24px;
        height: 24px;
        margin-left: -12px;
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        -webkit-animation: sdb07 2s infinite;
        animation: sdb07 2s infinite;
        opacity: 0;
        box-sizing: border-box;
    }

    #button02 a span:nth-of-type(1) {
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
    }

    #button02 a span:nth-of-type(2) {
        top: 16px;
        -webkit-animation-delay: .15s;
        animation-delay: .15s;
    }

    #button02 a span:nth-of-type(3) {
        top: 32px;
        -webkit-animation-delay: .3s;
        animation-delay: .3s;
    }

    @-webkit-keyframes sdb07 {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes sdb07 {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

@endsection

@section('content')
    <div class="flex-center position-ref full-height" id="section01">
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
            <div class="demo" id="button01">
                <a href="#button02"><span></span><span></span><span></span>Scroll Down</a>
            </div>
        </div>
    </div>
    <div class="flex-center position-ref full-height" id="section02">
        <div class="content2">
            <div class="title m-b-md">
                <h2>Que faisons-nous ?</h2>
            </div>
            <div class="p">
                <p>Chez Arcadia, nous créeons la machine d'arcade dont vous aviez toujours révé, nous travaillons dans les meilleurs délais grâce à la relation proches que nous entretenons avec notre clientèle.
                Peu importe le choix de votre thème nous vous écouterons avec professionalité et sérieux. Grâce à notre expérience et à notre imagination,
                vous découvrirez vos machine d'arcade dans toutes les couleurs et thèmes dont vous pourriez imaginer. Apprenez-en plus sur nous sur notre page<a href=""> "A propos".</a></p>
            </div>
            <div class="demo" id="button02">
                <a href="#button01"><span></span><span></span><span></span>Scroll Up</a>
            </div>
        </div>
    </div>
@endsection
