@extends('layouts.default')

@section('title', 'Créé un article')

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
    <div class="container full-height flex-center">
        <div class="align-items-center">
            @if ($success !== null)
                @if ($success == true)
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
            @endif
{{--            <form action="{{ action('PostController@store') }}" method="POST" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                Book title:--}}
{{--                <br />--}}
{{--                <input type="text" name="title" />--}}
{{--                <br /><br />--}}
{{--                Logo:--}}
{{--                <br />--}}
{{--                <input type="file" name="logo" />--}}
{{--                <br /><br />--}}
{{--                <input type="submit" value=" Save " />--}}
{{--            </form>--}}
            {!! form_start($form) !!}
            {!! form_rest($form) !!}
            {!! form_end($form) !!}
        </div>
    </div>
@endsection
