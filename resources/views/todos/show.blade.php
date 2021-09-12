@extends('layouts.app')

@section('content')
    <h1>Show</h1>
    <a href="/todo" class="btn btn-info float-right mt-2">戻る</a>
    <h2>{{ $todo->title }}</h2>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
    <form method="post" action="/todo/{{ $todo->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2 float-right">削除</button>
    </form>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-warning mt-2">編集</a>

@endsection
