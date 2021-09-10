@extends('layouts.app')

@section('content')
<h1>Create</h1>
<form method="post" action="/todo">
    @csrf
    <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="タイトルを入力" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="content">内容</label>
        <input type="text" class="form-control" name="content" id="content" value="{{ old('content') }}">
    </div>

    <div class=" form-group">
        <label for="due">締切</label>
        <input type="text" class="form-control" name="due" id="due" value="{{ old('due') }}">
    </div>

    <button type=" submit" class="btn btn-warning">送信</button>
</form>
@endsection
