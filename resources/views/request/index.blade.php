@extends('layouts.app')

@section('content')
    <form action="{{ route('form') }}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="text" name="name">
        <button>click</button>
    </form>
    <ul>
    @foreach($people as $item)
        <li>{{ $item['name'] }}  {{ $item->created_at->diffForHumans() }}</li>
    @endforeach
    </ul>
@endsection