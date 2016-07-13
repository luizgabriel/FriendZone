<div class="box box-widget">
    <div class="box-header with-border">
        <div class="user-block">
            <img class="img-circle" src="{{ url('img/user3-128x128.jpg') }}" alt="User Image">
            <span class="username"><a href="#">{{ $post->user->name }}</a></span>
            <span class="description">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                <i class="fa fa-circle-o"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                        class="fa fa-times"></i>
            </button>
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>{{ $post->content }}</p>
    </div>
    <!-- /.box-body -->
    <div class="box-footer box-comments">

        @foreach ([] as $comment)
            <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{ url('img/user3-128x128.jpg') }}"
                     alt="User Image">

                <div class="comment-text">
      <span class="username">
        {{ $user->name }}
          <span class="text-muted pull-right">{{ $comment->created_at->diffForHumanns() }}</span>
      </span><!-- /.username -->
                    {{ $comment->content }}
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.box-comment -->
        @endforeach
    </div>
    <!-- /.box-footer -->
    <div class="box-footer">
        <form action="#" method="post">
            <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg"
                 alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
                <input type="text" class="form-control input-sm"
                       placeholder="Press enter to post comment">
            </div>
        </form>
    </div>
    <!-- /.box-footer -->
</div>
