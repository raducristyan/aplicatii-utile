@if (Session::has('message'))
	<div class="alert alert-{{Session::get('message.type')}} in fade">
		<button class="close" type="button" data-dismiss="alert">
			<i class="fa fa-close" aria-hidden="true"></i>
		</button>
		<strong>
			<i class="fa fa-check-circle fa-fw"></i> {{Session::get('message.type')}}:&nbsp;
		</strong>
		{!!Session::get('message.content')!!}
	</div>
@endif
