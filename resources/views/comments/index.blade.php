@foreach ($post->comments()->get() as $comment)
    <div class="box-comment">
        <!-- User image -->
        <img class="img-circle img-sm" src="{{ url('img/user3-128x128.jpg') }}"
             alt="User Image">

        <div class="comment-text">
<span class="username">
{{ $comment->user->name }}
  <span class="text-muted pull-right">{{ $comment->created_at->diffForHumans() }}</span>
</span><!-- /.username -->
            {{ $comment->content }}
        </div>
        <!-- /.comment-text -->
    </div>
    <!-- /.box-comment -->
@endforeach
