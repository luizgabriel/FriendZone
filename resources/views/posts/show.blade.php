@extends('base')

@section('title', "Postagem de {$post->user->name}")

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('posts.item')
        </div>
    </div>


@endsection

@section('scripts')
  <script src="{{ url('js/comments/destroy.js') }}" charset="utf-8"></script>
  <script src="{{ url('js/comments/store.js') }}" charset="utf-8"></script>
@endsection
