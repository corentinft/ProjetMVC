@extends('layouts.default')

@section('title', 'Contact')

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
    justify-content: center;
    }

@endsection

@section('content')
    <div class="full-height">
        <div class="container">
            <div class="row" style="margin-bottom: 50px;margin-top: 50px">
                @if(isset($connectedUser) && $connectedUser['id'] == $post['user_id'])
                    <div class="col-12" style="margin-top: 20px; display: flex; flex-direction: row-reverse">
                        <button style="margin-left: 20px">
                            <a href="{{ route('article.destroy', ['article' => $post['id']]) }}" style="text-decoration: none; color: red">
                                Supprimer l'article
                            </a>
                        </button>
                        <button>
                            <a href="{{ route('article.edit', ['article' => $post['id']]) }}" style="text-decoration: none; color: black">
                                Modifier l'article
                            </a>
                        </button>
                    </div>
                @endif
                <div class="col-12" style="margin-top: 20px; display: flex; flex-direction: row-reverse">
                    {{ 'Publié le ' . $post['created_at'] }}
                </div>
                <div class="col-12" style="font-size: 40px; text-align: left">
                    {{ $post['title'] }}
                </div>
                <div class="col-12" style="margin-top: 20px">
                    <img src="{{ env('URL_UPLOAD').$post['url_image'] }}" alt="image_post" style="width: 100%">
                </div>
                <div class="col-12" style="font-size: 30px; margin-top: 20px; text-align: left">
                    {{ $post['text'] }}
                </div>
                <div class="col-12" style="margin-bottom: 20px; display: flex; flex-direction: row-reverse">
                    {{ 'Ecrit par ' . $user['name'] }}
                </div>
            </div>
        </div>
    </div>
@endsection
