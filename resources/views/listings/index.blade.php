@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">最新の名簿情報</div>

                <div class="card-body">
                    @if (count($listings))
                        <div class="list-group">
                            @foreach ($listings as $listing)
                                <div class="list-group-item">
                                    <a href="/listings/{{ $listing->id }}">
                                        {{ $listing->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>名簿情報がありません。</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
