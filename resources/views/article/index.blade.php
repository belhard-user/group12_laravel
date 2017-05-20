@extends('layouts.app')

@section('content')
    <h1>Новости</h1>
    <hr>
    <a class="btn btn-info" href="{{ route('article.create') }}">Создать</a>

    @forelse($articles as $article)
        <section>
            <h2>
                <a href="{{ route('article.show', ['article' => $article->slug]) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <p>{{ $article->created_at }}</p>
            <p>{{ $article->short_description }}</p>
        </section>
    @empty
        <p>Увы</p>
    @endforelse
    {{ $articles->render() }}
@endsection
