<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo/Logo site Original.png') }}" type="image/x-icon">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body>
    @if (isset($slot))
    <!-- Wrapper -->
    <section class="content home">
        <div class="container-fluid">
            <!-- Sidebar Wrapper -->
            <x-menu.lateral />
            <x-menu.superior />
            <div class="page-wrapper">
                {{ $slot }}
            </div>
            <x-rodape />
        </div>
    </section>
    @else
    @yield('content')
    @endif

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Core Scripts -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>

    @stack('js')
</body>

</html>
