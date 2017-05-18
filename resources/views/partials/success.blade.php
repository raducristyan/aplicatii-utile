@if (Session::has('success'))
	<div class="alert alert-success in fade" role="alert">
		<button class="close" type="button" data-dismiss="alert">
			<i class="fa fa-close fa-fw"></i>
		</button>
		<strong>
			<i class="fa fa-check-circle fa-lg fa-fw"></i>&nbsp;Succes:&nbsp;
		</strong>
		{{Session::get('success')}}
	</div>
@endif
