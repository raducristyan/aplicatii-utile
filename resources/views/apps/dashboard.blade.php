@extends('apps.layout') 
@section('page-wrapper')
<div class="row">
	<!-- Column -->
	<div class="col-lg-4 col-xlg-3 col-md-5">
		<div class="card">
			<div class="card-body">
				<center class="m-t-30">
					<img src="../assets/images/users/user-male.png" class="img-circle" width="150" />
					<h4 class="card-title m-t-10">{{ auth()->user()->full_name }}</h4>
					<h6 class="card-subtitle">{{ auth()->user()->job ?? 'Nu ați completat funcția în cadrul organizației' }}</h6>
					<div class="row text-center justify-content-md-center">
						<div class="col-4">
							<a href="javascript:void(0)" class="link">
								<i class="icon-people"></i>
								<font class="font-medium">254</font>
							</a>
						</div>
						<div class="col-4">
							<a href="javascript:void(0)" class="link">
								<i class="icon-picture"></i>
								<font class="font-medium">54</font>
							</a>
						</div>
					</div>
				</center>
			</div>
			<div>
				<hr> 
			</div>
			<div class="card-body">
				<small class="text-muted">Adresa de email </small>
				<h6>{{ auth()->user()->email }}</h6>
				<small class="text-muted p-t-30 db">Telefon mobil</small>
				@if ( auth()->user()->mobile )
					<h6>{{ auth()->user()->mobile }}</h6>
				@else
					<h6>Nu ați completat numărul de telefon</h6>
				@endif
				<small class="text-muted p-t-30 db">Adresa</small>
				@forelse ( auth()->user()->address as $address )
					<h6>
						@if ( $address->county ) {{ $address->county }}, @endif
						@if ( $address->city ) {{ $address->city }}, @endif
						@if ( $address->street ) {{ $address->street }}, @endif
						@if ( $address->number ) {{ $address->number }}, @endif
						@if ( $address->bl ) {{ $address->bl }}, @endif
						@if ( $address->sc ) {{ $address->sc }}, @endif
						@if ( $address->ap ) {{ $address->ap }}, @endif
						@if ( $address->postal_code ) {{ $address->postal_code }} @endif
					</h6>
				@empty
					<h6>Nu ați compleat adresa</h6>
				@endforelse
			</div>
		</div>
	</div>
	<!-- Column -->
	<!-- Column -->
	<div class="col-lg-8 col-xlg-9 col-md-7">
		<div class="card">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs profile-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#activity" role="tab">Activitate</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#settings" role="tab">Setări</a>
				</li>
				@admin
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#institution" role="tab">Instituție</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#users" role="tab">Utilizatori</a>
				</li>
				@endadmin
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				@include('apps.partials.tabs.activity')
				@include('apps.partials.tabs.settings')
				@admin
					@include('apps.partials.tabs.institution')
					@include('apps.partials.tabs.users')
				@endadmin
			</div>
		</div>
	</div>
	<!-- Column -->
</div>

@include('apps.partials.modals.userPassword')
@include('apps.partials.modals.userProfile')
@include('apps.partials.modals.userAddress')
@endsection