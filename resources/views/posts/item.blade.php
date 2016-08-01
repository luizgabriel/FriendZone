<div class="box box-widget">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ url('img/user3-128x4128.jpg') }}" alt="User Image">
            <span class="username"><a href="#">{{ $post->user->name }}</a></span>
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
    @if($post->comments()->count() > 0)
    <div class="box-footer box-comments">
        @include('comments.index', ['comments' => $post->comments()->get() ])
    </div>
    @endif
    <!-- /.box-footer -->
    <div class="box-footer">
      @include('comments.create')
    </div>
    <!-- /.box-footer -->
</div>
