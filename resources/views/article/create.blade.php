@extends('layouts.app')

@section('content')
    @include('errors.errors')
    {{ Form::open() }}
        @include('article._form')
    {{ Form::close() }}
@endsection