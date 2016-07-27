@extends('base')

@section('title', 'Hall de Postagens')

@section('content')

    @include('posts.create')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($posts as $post)
                @include('posts.item')
            @endforeach
        </div>
    </div>


@endsection

@section('scripts')
  <script src="{{ url('js/comments/index.js') }}" charset="utf-8"></script>
  <script src="{{ url('js/comments/destroy.js') }}" charset="utf-8"></script>
  <script src="{{ url('js/comments/store.js') }}" charset="utf-8"></script>
@endsection
