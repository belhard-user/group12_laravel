@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>
    <p>
        <a href="{{ route('article.edit', ['article' => $article->slug]) }}">Редактировать</a>
    </p>
@endsection
