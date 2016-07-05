<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Friend Zone')</title>

  @include('includes.styles')

</head>
<body class="hold-transition skin-purple-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('includes.header')

  <!-- =============================================== -->

  @include('includes.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content.header')
    </section>

    <!-- Main content -->
    <section class="content">

      @section('validation')
        @include('includes.validation')
      @show

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 0.0.1
    </div>
    <strong>Friend Zone</strong> | Este projeto não possui fins lucrativos.
  </footer>

</div>
<!-- ./wrapper -->

@include('includes.scripts')
</body>
</html>
