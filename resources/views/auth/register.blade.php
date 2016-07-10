@extends ('simple')

@section('content')

	<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar-se</h3>
    </div>
    
    <form action="{{ url('auth/register') }}" method="post">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">

      <div class="box-body">
        <div class="form-group has-feedback">
          <input type="name" name="name" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Senha">
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Senha">
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Criar Conta</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>

@endsection