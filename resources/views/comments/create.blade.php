<form action="{{ route('comments.store') }}" class="comments-store-form" method="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
    <input name="post_id" type="hidden" value="{{ $post->id }}" name="_token"/>
    <img class="img-responsive img-circle img-sm" src="{{ Auth::user()->photo_url }}"
         alt="Alt Text">
    <!-- .img-push is used to add margin to elements next to floating images -->
    <div class="img-push">
        <input name="content" type="text" autocomplete="off" class="form-control input-sm"
               placeholder="@lang('messages.comment.submit')">
    </div>
</form>
