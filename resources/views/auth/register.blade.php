@extends ('simple')

@section('content')

  <div class="row">
    <div class="col-md-12">

      <p class="login-box-msg">Faça parte dessa Rede Social!</p>

      <form action="{{ url('auth/register') }}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token"/>

        <div class="form-group has-feedback">
          <input type="name" name="name" class="form-control" placeholder="Nome">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Senha">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Senha">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
      </form>

    </div>
  </div>
@endsection


@section('extra')
  <a href="{{ url('/') }}">Já possui uma conta? Volte.</a>
@endsection
