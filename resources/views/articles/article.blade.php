@extends('layouts.default')

@section('title', 'Article')

@section('style')
    html,body {
    overflow: auto;
    }

    .full-height {
    min-height: 77.15vh;
    }

    .flex-center {
    align-items: center;
    display: flex;
    }
@endsection

@section('content')
    <div class="full-height">
        <div class="container">
            @foreach($posts as $post)
                <div class="card" style="margin-top: 30px; margin-bottom: 30px">
                    <div class="card-header" style="display: flex; flex-direction: row">
                        {{ $post['title'] }}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ env('URL_UPLOAD').$post['url_image'] }}" alt="image_post" style="width: 100%">
                            </div>
                            <div class="col-md-7">
                                <div class="row" style="text-align: left; font-size: 20px">
                                    {{ $post['object'] }}
                                </div>
                                <div class="row" style="text-align: left; font-size: 20px">
                                    @if (strlen($post['text']) >= 151 )
                                        {{ substr($post['text'], 0, 150).'...' }}
                                    @else
                                        {{ $post['text'] }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button style="float: right">
                            <a href="{{ url('article/'.$post['id']) }}" style="text-decoration: none; color: black">
                                Voir l'article en entier
                            </a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
