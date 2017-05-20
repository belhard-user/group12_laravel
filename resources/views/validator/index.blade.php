@extends('layouts.app')


@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif

    <form action="" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="age" value="{{ old('age') }}">
        <button>click</button>
    </form>
@endsection