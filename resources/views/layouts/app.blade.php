<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accounts | Log in</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page">
        @yield('content')

        <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
        
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass   : 'iradio_square-blue',
                    increaseArea : '20%' // optional
                })
            })
        </script>
    </body>
</html>