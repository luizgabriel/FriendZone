@extends('base')

@section('title', "Postagem de {$post->user->name}")

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('posts.item')
        </div>
    </div>


@endsection
