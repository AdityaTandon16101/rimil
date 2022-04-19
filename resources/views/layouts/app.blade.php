<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  @stack('css')
</head>

<body class="app">
  <div id="app">
    <x-app.sidebar />
    <div class="page">
      <x-app.header />
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>

</html>