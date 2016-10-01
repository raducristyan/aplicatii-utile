@if (count($errors)>0)
	<div class="alert alert-danger in fade">
		<strong>Upsss! </strong>Sunt câteva probleme cu câmpurile care trebuie completate.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
