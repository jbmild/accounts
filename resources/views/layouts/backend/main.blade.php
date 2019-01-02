<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Accounts')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/flat/blue.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/morris/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker-bs3.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts.backend.navbar')
            @include('layouts.backend.sidebar')
            @yield('content')


            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.0-alpha
                </div>
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>


        <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('backend/plugins/knob/jquery.knob.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('backend/dist/js/demo.js') }}"></script>

        @yield('script')
    </body>
</html>