<a href="#">
    <div class="pull-left">
        <img src="{{ url('img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <h4>
        {{ $friendrequest->sender->name }}
        <small><i class="fa fa-clock-o"></i>{{ $friendrequest->created_at->diffForHumans() }}</small>
    </h4>
    <p>@lang('messages.friends.sent')</p>

    <form method="post" class="pull-right" action="{{ route('friendrequests.answer', $friendrequest) }}">
        <input type="hidden" name="sender_id" value="{{ $friendrequest->sender->id }}">

        <div class="btn-group">
            <button type="submit" class="btn btn-xs btn-success" name="action" value="accept">
                <i class="fa fa-check"></i> @lang('messages.friends.accept')
            </button>
            <button type="submit" class="btn btn-xs btn-danger" name="action" value="refuse">
                <i class="fa fa-times"></i> @lang('messages.friends.refuse')
            </button>
        </div>
    </form>
</a>
