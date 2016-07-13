<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <!-- form start -->
            <form action="{{ url('posts') }}" method="post" class="form-horizontal">
              <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
              
                <div class="box-body">
                    <div class="col-md-2 hidden-xs">
                        <img src="{{ url('img/user3-128x128.jpg') }}" class="img-circle" alt="User Image"
                             width="100%"/>
                    </div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="3"
                                      placeholder="O que você está pensando?"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info pull-right">
                      <i class="fa fa-pencil"></i>
                      Postar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
