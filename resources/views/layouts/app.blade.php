<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyApp10</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  @include('inc.navbar')

  <div class="container h-75">
    @if (Request::is('/'))
      @include('inc.showcase')
    @endif

    @include('inc.messages')

    <div class="row py-4">
      <div class="col-md-12 col-lg-12">
        @yield('content')
      </div>
      {{-- <div class="col-md-8 col-lg-8">
        @yield('content')
      </div>
      <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
      </div> --}}
    </div>


  </div>

  <footer id="footer" class="text-center mt-5">
    <p>Copyright 2021 &copy; yanagi-t</p>
  </footer>
</body>
</html>
