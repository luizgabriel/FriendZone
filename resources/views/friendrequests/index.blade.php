<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-group"></i>
        <span class="label label-success">4</span>
    </a>
        <ul class="dropdown-menu">
            <li class="header">Solicitações de amizade</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    @foreach (Auth::user()->friendrequests() as $friendrequest)
                        <li><!-- start message -->
                            <a href="#">
	    						<div class="pull-left">
	        						<img src="{{ url('img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
	    						</div>
	    						<h4>
	        						{{ $friendrequest->user->name }}
	        						<small><i class="fa fa-clock-o"></i>{{ $friendrequest->created_at->diffForHumans() }}</small>
	    						</h4>
	    						<p>Enviou uma solicitação de amizade</p>
	    						<button type="submit" class="btn btn-primary">Aceitar</button>
	   							<button type="submit" class="btn btn-danger">Recusar</button>
							</a> 
                        </li>
                        <!-- end message -->
                    @endforeach
                </ul>
            </li>
        </ul>
</li>