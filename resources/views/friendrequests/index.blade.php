<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-group"></i>
        @if (($_fr_count = Auth::user()->receivedFriendRequests()->count()) > 0)
            <span class="label label-success">{{ $_fr_count }}</span>
        @endif
    </a>
        <ul class="dropdown-menu">
            @if(Auth::user()->receivedFriendRequests()->count() == 0)
                <li class="header">Você não possui solicitações de amizade</li>
            @else
                <li class="header">Solicitações de amizade</li>
            @endif
            <li>
                <ul class="menu">
                    @foreach (Auth::user()->receivedFriendRequests as $friendrequest)
                        <li>
                            @include('friendrequests.show')
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
</li>