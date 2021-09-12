@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listing->name }}
                    <span class="float-right">
                        <a href="/listings" class="btn btn-secondary">戻る</a>
                    </span>
                </div>

                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item">
                            住所： {{ $listing->address }}
                        </div>
                        <div class="list-group-item">
                            WEB： <a href=" {{ $listing->website }}">{{ $listing->website }}</a>
                        </div>
                        <div class="list-group-item">
                            Eメール： <a href="mailto:{{ $listing->email }}?Subject=Hello%20again" target="_top">{{ $listing->email }}</a>
                        </div>
                        <div class="list-group-item">
                            電話番号： {{ $listing->phone }}
                        </div>
                        <div class="list-group-item">
                            経歴： {{ $listing->bio }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
