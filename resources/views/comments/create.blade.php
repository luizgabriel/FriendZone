<form action="{{ route('comments.store') }}" method="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
    <input name="post_id" type="hidden" value="{{ $post->id }}" name="_token"/>
    <img class="img-responsive img-circle img-sm" src="{{ url('img/user3-128x128.jpg') }}"
         alt="Alt Text">
    <!-- .img-push is used to add margin to elements next to floating images -->
    <div class="img-push">
        <input name="content" type="text" class="form-control input-sm"
               placeholder="Digite o seu comentário e pressione Enter">
    </div>
</form>
