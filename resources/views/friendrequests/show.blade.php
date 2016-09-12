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
        <form method="post" action="{{route('friendrequests.accept', $friendrequest)}}">
            <input type="hidden" name="sender_id" value="{{$friendrequest->sender->id}}">
            <button type="submit" class="btn btn-sm btn-primary">
                Aceitar
            </button>
        
        <form method="post" action="{{route('friendrequests.refuse', $friendrequest)}}">
            <input type="hidden" name="sender_id" value="{{$friendrequest->sender->id}}">
            <button type="submit" class="btn btn-sm btn-danger">
                Recusar
            </button>
        </form>
    </div>
</a>