@extends('layouts.app')

@section('content')
    @include('errors.errors')
    <h3>{{ trans('custom.Create News') }}</h3>
    {{ Form::model($article, ["method" => "put", "route" => ['article.update', 'article' => $article->slug]]) }}
    @include('article._form', ['btnText' => 'Обновить'])
    {{ Form::close() }}
@endsection