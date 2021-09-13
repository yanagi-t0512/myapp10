@extends('layouts.app')

@section('content')
<h1>写真　新規作成</h1>
<form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="album-id" value="{{ $albumId }}">
    <div class="form-group">
        <label for="title">タイトル</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="タイトルを入力" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="description">詳細</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ old('desctiption') }}">
    </div>

    <div class=" form-group">
        <label for="photo">写真</label>
        <input type="file" class="form-control" name="photo" id="photo">
    </div>

    <button type=" submit" class="btn btn-warning">送信</button>
</form>
@endsection
