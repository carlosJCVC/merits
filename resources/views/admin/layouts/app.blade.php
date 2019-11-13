<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Meritos') }}  @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/font-awesome-4.6.1/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->
    <link href="{{ asset('assets/css/ionicons-2.0.1/ionicons-2.0.1/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <link href="{{ asset('assets/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('styles')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</head>

<body class="hold-transition skin-blue  sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts._navbar')

        @include('admin.layouts._sidebar')

        @if (Session::has('message'))
            <script>
                var type = "{!! Session::get('alert-type', 'info') !!}"
                var message = "{{ Session::get('message') }}"
                notification(type, message)
            </script>
        @endif

        @yield('content')

        @include('partials.controlsidebar')

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/js/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>

    @yield('scripts')

</body>
</html>