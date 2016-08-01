@extends('base')

@section('content')
<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{ url('img/user4-128x128.jpg') }}" alt="User profile picture">
        <h3 class="profile-username text-center">{{$user->name}}</h3>
        <p class="text-muted text-center">Golf Player</p>
        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Friends</b> <a class="pull-right">8,001</a>
          </li>
        </ul>
        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

  <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="false">Postagens</a></li>
              @if (Auth::user()->id == $user->id)
              <li><a href="#settings" data-toggle="tab" aria-expanded="true">Perfil</a></li>
              @endif
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="activity">

                @foreach($user->posts as $post)
                  @include('posts.item', compact('post'))
                @endforeach

              </div>

              @if ($user->id == Auth::user()->id)
              <div class="tab-pane" id="settings">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-center">
                      Editar Perfil<br/>
                      <small>Atualize as informações do seu perfil</small>
                    </h2>

                    <div class="col-md-8 col-md-offset-2">
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