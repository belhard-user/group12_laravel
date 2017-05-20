@extends('layouts.app')

@section('content')

    {{ Form::open() }}
        @include('article._form')
    {{ Form::close() }}
@endsection