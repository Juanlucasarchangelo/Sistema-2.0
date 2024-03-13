{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/images/fav icon ta telecom.png') }}" type="image/x-icon" />
    <!--plugins-->
    <link href="{{ asset('/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/bower_components/select2/dist/css/select2.css') }}" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/plugins/morrisjs/morris.css') }} />
    <link rel="stylesheet" href={{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }} />

    <!-- Custom Css -->
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/color_skins.css') }}>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewireStyles
</head>

<body>
    @if (isset($slot))
        <!--wrapper-->
        <section class="content home">
            <div class="container-fluid">
                <!--sidebar wrapper -->
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

    @livewireScripts

    <!-- Jquery Core Js -->
    <script src={{ asset('assets/bundles/libscripts.bundle.js') }}></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src={{ asset('assets/bundles/vendorscripts.bundle.js') }}></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src={{ asset('assets/bundles/knob.bundle.js') }}></script> <!-- Jquery Knob-->
    <script src={{ asset('assets/bundles/jvectormap.bundle.js') }}></script> <!-- JVectorMap Plugin Js -->
    <script src={{ asset('assets/bundles/morrisscripts.bundle.js') }}></script> <!-- Morris Plugin Js -->
    <script src={{ asset('assets/bundles/sparkline.bundle.js') }}></script> <!-- sparkline Plugin Js -->
    <script src={{ asset('assets/bundles/doughnut.bundle.js') }}></script>

    <script src={{ asset('assets/bundles/mainscripts.bundle.js') }}></script>
    <script src={{ asset('assets/js/pages/index.js') }}></script>
    @stack('js')
</body>

</html>
