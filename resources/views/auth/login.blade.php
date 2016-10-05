@extends('simple')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/icheck.css') }}"/>
@endsection

@section('content')

    <p class="login-box-msg">@lang('messages.login.credentials')</p>

    <form action="{{ url('auth/login') }}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">

        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="{{ ucfirst(trans('validation.attributes.password')) }}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <label>
                    <input type="checkbox" class="icheck"/> @lang('messages.login.remember-me')
                </label>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('messages.login.submit')</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <!--<a href="#">@lang('messages.login.forgot-pwd')</a><br>-->
    <a href="/auth/register" class="text-center">@lang('messages.login.register')</a>

@endsection

@section('scripts')
    <script src="{{ url('js/icheck.min.js') }}"></script>
    <script>
        $('input').iCheck({ checkboxClass: 'icheck' });
    </script>
@endsection
