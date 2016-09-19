<div class="box box-widget"
     data-post-id="{{ $post->id }}"
     data-current-page="0">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ $post->user->photo_url }}" alt="User Image">
            <span class="username"><a href="/profile/{{$post->user->id}}">{{ $post->user->name }}</a></span>
            <span class="description">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                class="fa fa-minus"></i>
            </button>
            @if($post->user_id == Auth::user()->id)
            <form action="{{ route('posts.destroy', $post->id) }}" class="pull-right" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-box-tool"><i
                            class="fa fa-times"></i>
                </button>
            </form>
            @endif
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>{{ $post->content }}</p>
    </div>
    <!-- /.box-body -->

    <div class="box-footer box-comments">
        @include('comments.index', ['comments' => $post->comments->take(2)])
    </div>

    @if($post->comments->count() > 2)
    <div class="box-footer">
        <a href="#" class="show-more-comments-btn">@lang('messages.posts.morecomments')</a>
        <div class="pull-right">
          <span class="comments-count">2</span> de <span class="comments-total">{{ $post->comments->count() }}</span>
        </div>
    </div>
    @endif

    <div class="box-footer">
      @include('comments.create')
    </div>

</div>
