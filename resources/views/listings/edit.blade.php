@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing
                    <span class="float-right">
                        <a href="{{ route('listings-top') }}" class="btn btn-secondary">戻る</a>
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/listings/{{ $listing->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="名前を入力"
                                value="{{ $listing->name }}">
                        </div>

                        <div class=" form-group">
                            <label for="address">住所</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{ $listing->address }}">
                        </div>

                        <div class=" form-group">
                            <label for="website">Web:</label>
                            <input type="text" class="form-control" name="website" id="website"
                                value="{{ $listing->website }}">
                        </div>

                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $listing->email }}">
                        </div>

                        <div class=" form-group">
                            <label for="phone">電話番号</label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                value="{{ $listing->phone }}">
                        </div>

                        <div class=" form-group">
                            <label for="bio">経歴</label>
                            <input type="text" class="form-control" name="bio" id="bio" value="{{ $listing->bio }}">
                        </div>

                        <button type=" submit" class="btn btn-warning">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
