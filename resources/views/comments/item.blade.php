<div class="box-comment" data-id="{{ $comment->id }}">
    <!-- User image -->
    <img class="img-circle img-sm" src="{{ $comment->user->photo_url }}"
         alt="User Image">

    <div class="comment-text">
        <span class="username">
          {{ $comment->user->name }}
          <div class="pull-right">
            <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
            @if($comment->user_id == Auth::user()->id)
            <button type="button" class="btn btn-box-tool destroy-comment-btn">
              <i class="fa fa-times"></i>
            </button>
            @endif
          </div>

        </span><!-- /.username -->
            {{ $comment->content }}
    </div>
    <!-- /.comment-text -->
</div>
<!-- /.box-comment -->
