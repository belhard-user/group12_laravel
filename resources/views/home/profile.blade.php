@extends('layouts.app')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $name }}</h3>
        </div>
        <div class="panel-body">He is {{ $age }} old</div>
    </div>
@endsection