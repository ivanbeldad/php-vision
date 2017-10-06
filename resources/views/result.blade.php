@extends('base')

@section('title', 'Vision - Result')

<style>
    main {
        font-size: 2rem;
        margin: 30px 100px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
    }
</style>

@section('main')
    <p>{!! $text !!}</p>

    <a href="{{ route('vision') }}">< Volver</a>
@endsection
