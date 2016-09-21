<form action="{{ url('profile/update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row" style="margin-top: 10px; margin-bottom: 10px">
        <div class="col-md-2 col-sm-2 col-md-offset-0 col-xs-6 col-xs-offset-2">
            <img class="img-circle" src="{{ $user->photo_url }}" width="100%" alt=""/>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="form-group">
                <label for="photo">Foto</label>
                <input type="file" name="photo"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">{{ ucfirst(trans('validation.attributes.name')) }}</label>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Hobby</label>
        <div class="col-md-10">
            <input type="text" name="hobby" class="form-control" value="{{ $user->hobby }}" placeholder="@lang('messages.users.hobby-description')">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-danger">@lang('messages.users.update-register')</button>
        </div>
    </div>
</form>
