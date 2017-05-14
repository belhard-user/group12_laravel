@extends('layouts.app')

@section('content')
    <h1>Новости</h1>

    @forelse($articles as $article)
        <section>
            <h2>
                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
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
