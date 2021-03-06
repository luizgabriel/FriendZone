@extends('base')

@section('content')
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">@lang('messages.friends.friends-of', ['name' => $user->name])</h3>
            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

              <div class="col-md-12">
                @if ($friends->count() == 0)
                  <h3 class="text-center">
                    <span class="fa fa-frown-o text-blue" style="font-size: 40px"></span><br/>
                    @lang('messages.friends.still-dont') <br/>
                    <small>@lang('messages.friends.what-about')</small>
                  </h3>
                @endif

                @foreach ($friends as $friend)
                <div class="friend-item">
                  <img alt="User Image" class="img-circle pull-left" src="{{  $friend->photo_url }}" width="70px">
                  <h4>
                    <a href="{{ route('users.show', $friend->id) }}">{{$friend->name}}</a><br/>
                    <small>@lang('messages.friends.fd-since') {{ $friend->pivot->created_at->format('d/m/Y') }}</small>
                  </h4>
                </div>
                @endforeach
              </div>

          </div>
          <!-- /.box-body -->
        </div>

@endsection
