@extends('layouts.app')

@section('content')
    <h1>アルバム　詳細</h1>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $album->name }}</h1>
            <p class="lead text-muted">{{ $album->description }}
            <p>
            <p>
                <a href="{{ route('photo-create', $album->id) }}" class="btn btn-primary my-2">写真を追加</a>
                <a href="/albums" class="btn btn-secondary my-2">戻る</a>
            </p>
        </div>
    </section>

    <div class="row">
        @foreach ($album->photos as $photo)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="/storage/albums/{{ $album->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}"
                        height="200px">
                    <div class="card-body">
                        <p class="card-text">{{ $photo->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('photo-show', $photo->id) }}"
                                    class="btn btn-sm btn-outline-secondary">見る</a>
                            </div>
                            <small class="text-muted">{{ $photo->size }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
