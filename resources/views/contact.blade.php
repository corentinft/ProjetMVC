@extends('layouts.default')

@section('title', 'Contact')

@section('style')
    .full-height {
    height: 94vh;
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
            @if ($success != null)
                @if ($success == true)
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @elseif ($success == false)
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
            @endif

            {!! form_start($form) !!}
            <div class="row">
                <div class="col-sm-6">{!! form_row($form->firstname) !!}</div>
                <div class="col-sm-6">{!! form_row($form->lastname) !!}</div>
            </div>
            {!! form_rest($form) !!}
            {!! form_end($form) !!}
        </div>
    </div>
@endsection
