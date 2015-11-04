<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ? $title. '| ' : '' }}Paweł Rogowicz</title>
    <link rel="stylesheet" href="{{ url(elixir('css/app.css')) }}">
</head>
<body>
    <div class="container">
        @include('elements.alerts')
        @yield('content')
    </div>
{{--    <script src="{{ url('jquery.min.js') }}"></script>--}}
    <script src="{{ url(elixir('js/scripts.js')) }}"></script>
</body>
</html>