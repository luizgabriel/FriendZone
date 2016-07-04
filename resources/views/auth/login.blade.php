@extends('simple')

@section('content')

    <p class="login-box-msg">Entre com suas credenciais</p>

    <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Lembrar de mim
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <!--
    <a href="#">Esqueci minha senha</a><br>
    <a href="#" class="text-center">Quero me cadastrar</a>
    -->

@endsection

@section('scripts')
    <script src="{{ url('js/icheck.min.js') }}"></script>
    <script>
        $('input').iCheck({ checkboxClass: 'icheck' });
    </script>
@endsection