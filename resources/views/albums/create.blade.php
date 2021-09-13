@extends('layouts.app')

@section('content')
<h1>アルバム　新規作成</h1>
<form method="post" action="{{ route('album-store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="アルバム名を入力" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="description">詳細</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ old('desctiption') }}">
    </div>

    <div class=" form-group">
        <label for="cover-image">画像</label>
        <input type="file" class="form-control" name="cover-image" id="cover-image">
    </div>

    <button type=" submit" class="btn btn-warning">送信</button>
</form>
@endsection
