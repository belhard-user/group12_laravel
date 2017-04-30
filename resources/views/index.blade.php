@extends('main')

@section('body')
    <h1>Hello</h1>
    {{--это важный комментарий--}}
    <ul>
        @each('part.a', $names, 'name')
    </ul>
@endsection