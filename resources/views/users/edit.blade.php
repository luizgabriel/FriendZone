<form action="{{ url('profile/update') }}" method="post" class="form-horizontal">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Nome</label>
        <div class="col-md-11">
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Nome">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-danger">Atualizar Dados</button>
        </div>
    </div>
</form>