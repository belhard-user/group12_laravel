@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(count($users))
                <ul class="list-group">
                    @foreach($users as $user)
                        <li class="list-group-item">
                            <a href="{{ action('HomeController@profile', [
                                'name' => array_get($user, 'name', 'o_O'),
                                'age' => array_get($user, 'age')
                            ]) }}">{{ array_get($user, 'name', 'o_O') }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
