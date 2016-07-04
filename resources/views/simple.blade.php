<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Friend Zone')</title>

    @include('includes.styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/">
            <img src="{{ url('img/logo_dark.png') }}" width="100%" alt=""/>
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        @yield('content')

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('includes.scripts')
</body>
</html>
