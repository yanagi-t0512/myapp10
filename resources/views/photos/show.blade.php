@extends('layouts.app')

@section('content')
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <form method="post" action="{{ route('photo-destroy', $photo->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" name="button" class="btn btn-danger float-right">削除</button>
    </form>
    <a href="{{ route('album-show', $photo->album->id) }}" class="btn btn-info">戻る</a>
    <br>
    <small>Size: {{ $photo->size }}</small>
    <hr>
    <img src="/storage/albums/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" width="990px">
    <hr>
@endsection
