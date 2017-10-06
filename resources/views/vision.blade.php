@extends('base')

@section('title', 'Vision - Form')

@section('main')
    <form method="post" action="{{ route('analyze') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="image">Upload an image:</label>
        <input type="file" name="image" id="image">
        <input type="submit">
    </form>
@endsection
