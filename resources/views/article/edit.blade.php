@extends('layouts.app')

@section('content')
    {{ Form::model($article, ["method" => "put", "route" => ['article.update', 'article' => $article->slug]]) }}
    @include('article._form', ['btnText' => 'Обновить'])
    {{ Form::close() }}
@endsection