@extends ('simple')

@section('content')

  <div class="row">
    <div class="col-md-12">

      <p class="login-box-msg">@lang('messages.register.be-part')</p>

      <form action="{{ url('auth/register') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
        <div class="form-group">
          <label for="photo">Foto</label>
          <input type="file" name="photo"/>
        </div>

        <div class="form-group has-feedback">
          <input type="name" name="name" class="form-control" placeholder="{{ ucfirst(trans('validation.attributes.name')) }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="{{ ucfirst(trans('validation.attributes.password')) }}">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" class="form-control" placeholder="{{ ucfirst(trans('validation.attributes.password_confirmation')) }}">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('messages.register.submit')</button>
      </form>

    </div>
  </div>
@endsection


@section('extra')
  <a href="{{ url('/') }}">@lang('messages.register.already_rgs')</a>
@endsection
