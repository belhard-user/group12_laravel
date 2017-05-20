@extends('layouts.app')

@section('content')
    <form action="" method="post">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="title" placeholder="Заголовок" name="title">
        </div>

        <div class="form-group">
            <label for="sd">Короткое описание</label>
            <textarea class="form-control" name="short_description" id="sd" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="body">Описание</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-success btn-lg">Создать</button>
    </form>
@endsection