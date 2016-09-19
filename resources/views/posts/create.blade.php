<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <!-- form start -->
            <form action="{{ route('posts.store') }}" method="post" class="form-horizontal">
              <input type="hidden" value="{{ csrf_token() }}" name="_token"/>

                <div class="box-body">
                    <div class="col-md-2 hidden-xs">
                        <img src="{{ Auth::user()->photo_url }}" class="img-circle" alt="User Image"
                             width="100%"/>
                    </div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="3"
                                      placeholder="@lang('messages.posts.whatdoya')"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info pull-right">
                      <i class="fa fa-pencil"></i>
                      @lang('messages.posts.post')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
