@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed corrupti repellat blanditiis possimus harum labore sapiente, saepe iure veniam provident impedit cupiditate reprehenderit nisi reiciendis obcaecati consequuntur fugit maiores in.</p>
@endsection

@section('sidebar')
  @parent
  <p>This appended to the sidebar</p>
@endsection
