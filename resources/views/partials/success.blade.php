@if (Session::has('success'))
	<div class="alert alert-success in fade">
		<button class="close" type="button" data-dismiss="alert">&times;</button>
		<strong>
			<i class="fa fa-check-circle fa-lg fa-fw"></i> Succes. &nbsp;
		</strong>
		{{Session::get('success')}}
	</div>
@endif
