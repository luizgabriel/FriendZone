<a href="#">
    <div class="pull-left">
        <img src="{{ url('img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <h4>
        {{ $friendrequest->sender->name }}
        <small><i class="fa fa-clock-o"></i>{{ $friendrequest->created_at->diffForHumans() }}</small>
    </h4>
    <p>Enviou uma solicitação de amizade</p>

    <div class="btn-group pull-right">
        <button type="submit" class="btn btn-sm btn-primary">
            <i class="fa fa-check"></i> Aceitar
        </button>
        <button type="submit" class="btn btn-sm btn-danger">
            <i class="fa fa-close"></i> Recusar
        </button>
    </div>
</a>