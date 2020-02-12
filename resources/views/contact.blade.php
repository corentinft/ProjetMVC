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

    .position-ref {
    position: relative;
    }

    .content {
    text-align: center;
    }

    form.form {
    display: table;
    }

    div.form {
    display: table-row;
    }

    label, input {
    display: table-cell;
    margin-bottom: 10px;
    }

    label {
    padding-right: 10px;
    }

@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            {!! form_start($form) !!}
            {!! form_end($form) !!}
        </div>
    </div>
@endsection
