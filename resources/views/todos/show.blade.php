@extends('layouts.app')

@section('content')
  <h1>Show</h1>
  <a href="/todo" class="btn btn-info float-right">戻る</a>
  <h2>{{ $todo->title }}</h2>
  <div class="label label-danger">{{ $todo->due }}</div>
  <hr>
  <p>{{ $todo->content }}</p>

@endsection
