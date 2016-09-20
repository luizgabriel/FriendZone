@extends('base')

@section('content')
<div class="row">
  <div class="col-md-4">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{  Auth::user()->photo_url  }}" alt="User profile picture">
        <h3 class="profile-username text-center">{{$user->name}}</h3>
        <p class="text-muted text-center">Golf Player</p>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>@lang('messages.friends.friends')</b> <a class="pull-right"> {{ $user->friends()->count() }}</a>
          </li>
        </ul>
        @if(Auth::user()->id != $user->id)
          @if (Auth::user()->hasFriend($user->id) || Auth::user()->hasAlreadySentFriendRequestTo($user->id))
            <button class="btn btn-primary btn-block btn-lg" disabled>
              <i class="fa fa-check"></i> @lang('messages.friends.sent')
            </button>
          @else
            <form method="post" action="{{ route('friendrequest.store', $user) }}">
              <input type="hidden" name="receiver_id" value="{{$user->id}}">
              <button type="submit" class="btn btn-primary btn-block btn-lg">
                <i class="fa fa-user-plus"></i> @lang('messages.friends.send')
              </button>
            </form>
          @endif
        @endif
      </div>
      <!-- /.box-body -->
    </div>

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">@lang('messages.friends.friends')</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <ul class="users-list clearfix">
          @foreach($user->friends()->take(8)->get() as $friend)
            <li>
              <img src="{{  $friend->photo_url }}" alt="User Image">
              <a class="users-list-name" href="{{ route('users.show', $friend->id) }}">{{ $friend->name }}</a>
              <span class="users-list-date">{{ $friend->pivot->created_at->diffForHumans() }}</span>
            </li>
          @endforeach
        </ul>
        <!-- /.users-list -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="/friends" class="uppercase">@lang('messages.friends.see-all')</a>
      </div>
      <!-- /.box-footer -->
    </div>

  </div>

  <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="false">@lang('messages.friends.posts')</a></li>
              @if (Auth::user()->id == $user->id)
                <li><a href="#settings" data-toggle="tab" aria-expanded="true">Perfil</a></li>
              @endif
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="activity">

                @if ($user->posts->count() == 0)
                  <div class="help-block text-center"><b>{{ $user->name }}</b> @lang('messages.friends.doesnt-have-posts')</div>
                @endif

                @foreach($user->posts as $post)
                  @include('posts.item', compact('post'))
                @endforeach

              </div>

              @if ($user->id == Auth::user()->id)
              <div class="tab-pane" id="settings">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-center">
                      @lang('messages.users.edit')<br/>
                      <small>@lang('messages.users.update-yer')</small>
                    </h2>

                    <div class="col-md-10 col-md-offset-1">
                      @include('users.edit')
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              @endif
            </div>
            <!-- /.tab-content -->
          </div>
  </div>
</div>

@endsection
