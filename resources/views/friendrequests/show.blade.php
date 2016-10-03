<a href="#">
    <div class="pull-left">
        <img src="{{ url('img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <h4>
        {{ $friend->name }}
    </h4>
    <p>@lang('messages.friends.sent')</p>

    <form method="post" class="pull-right" action="{{ route('friendrequests.answer', $friend->id) }}">
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
