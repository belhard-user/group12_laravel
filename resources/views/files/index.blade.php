@extends('layouts.app')

@section('content')
    {{ Form::open(['files' => true]) }}
        {{ Form::file('photo[]', ['multiple']) }}

    <button>load</button>
    {{ Form::close() }}
@endsection