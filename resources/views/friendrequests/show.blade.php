<a href="#">
    <div class="pull-left">
        <img src="{{ $requester->photo_url }}" class="img-circle" alt="User Image">
    </div>
    <h4>
        {{ $requester->name }}
    </h4>
    <p>@lang('messages.friends.sent')</p>

    <form method="post" class="pull-right" action="{{ route('friendrequests.answer') }}">
        <input type="hidden" name="sender_id" value="{{ $requester->id }}">

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
