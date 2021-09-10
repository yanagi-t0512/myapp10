@extends('layouts.app')

@section('content')
  <h1>問い合わせフォーム</h1>

  <form method="post" action="{{ route('contact-form-submit') }}">
    @csrf
    <div class="form-group">
      <label for="name">名前</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="名前を入力">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">メールアドレス</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="メールアドレスを入力">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="subject">主題</label>
      <input type="text" class="form-control" name="subject" id="subject" placeholder="主題を入力">
    </div>

    <div class="form-group">
      <label for="message">お問い合わせ内容</label>
      <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-warning">送信</button>
  </form>
@endsection
