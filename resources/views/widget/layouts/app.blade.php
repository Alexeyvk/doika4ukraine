<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Doika') }}</title>

    <!-- Scripts -->

    <script type="application/json" data-settings-selector="settings-json">
        {!! json_encode([
            'locale' => app()->getLocale(),
            'appName' => config('app.name'),
            'homePath' => route('widget.home'),
            'widgetBasePath' => '/doika/doika/widget',
            'locales' => 'en',
            'user' => $loggedInUser,
        ]) !!}
    </script>

    <!-- Styles -->

    <link href="{{ asset(mix('build/css/widget/widget.css')) }}" rel="stylesheet">

    @routes()
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset(mix('build/js/widget/widget.js')) }}"></script>
</body>
</html>
