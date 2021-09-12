@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <span class="float-right">
                        <a href='/listings/create' class="btn btn-secondary">名簿を作成</a>
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>名簿</h3>
                    @if (count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Compny</th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>
                                        <form class="float-right ml-2" action="/listings/{{ $listing->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="button" class="btn btn-danger">削除</button>
                                        </form>
                                        <a href="/listings/{{ $listing->id }}/edit" class="btn btn-info float-right">編集</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>名簿情報が登録されていません。</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
