<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Friend Zone')</title>

    @include('includes.styles')
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

        @section('validation')
            @include('includes.validation')
        @show

        @yield('content')

    </div>
    <!-- /.login-box-body -->

    <div class="text-center" style="margin-top: 20px">
      @yield('extra')
    </div>
</div>
<!-- /.login-box -->

@include('includes.scripts')
</body>
</html>
