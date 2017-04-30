@extends('main')

@section('body')
    <h1>Hello {{ $name }} {{ $lname }}</h1>
@endsection

@section('title', 'Hello')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection