@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    <form method="post" action="/todo/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="タイトルを入力"
                value="{{ $todo->title }}">
        </div>

        <div class="form-group">
            <label for="content">内容</label>
            <input type="text" class="form-control" name="content" id="content" value="{{ $todo->content }}">
        </div>

        <div class=" form-group">
            <label for="due">締切</label>
            <input type="text" class="form-control" name="due" id="due" value="{{ $todo->due }}">
        </div>

        <button type=" submit" class="btn btn-warning">送信</button>
    </form>
@endsection
