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
					<h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
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
				<hr> </div>
			<div class="card-body">
				<small class="text-muted">Adresa de email </small>
				<h6>{{ auth()->user()->email }}</h6>
				<small class="text-muted p-t-30 db">Telefon</small>
				<h6>+91 654 784 547</h6>
				<small class="text-muted p-t-30 db">Adresa</small>
				<h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
				<div class="map-box">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
					 width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<small class="text-muted p-t-30 db">Social Profile</small>
				<br/>
				<button class="btn btn-circle btn-secondary">
					<i class="fa fa-facebook"></i>
				</button>
				<button class="btn btn-circle btn-secondary">
					<i class="fa fa-twitter"></i>
				</button>
				<button class="btn btn-circle btn-secondary">
					<i class="fa fa-youtube"></i>
				</button>
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
					<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#settings" role="tab">Setări</a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="activity" role="tabpanel">
					<div class="card-body">
						<div class="profiletimeline">
							
						</div>
					</div>
				</div>
				<!--second tab-->
				<div class="tab-pane" id="profile" role="tabpanel">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3 col-xs-6 b-r">
								<strong>Nume</strong>
								<br>
								<p class="text-muted">{{ auth()->user()->full_name }}</p>
							</div>
							<div class="col-md-3 col-xs-6 b-r">
								<strong>Mobil</strong>
								<br>
								<p class="text-muted">{{ auth()->user()->mobile or auth()->user()->phone }}</p>
							</div>
							<div class="col-md-3 col-xs-6 b-r">
								<strong>Email</strong>
								<br>
								<p class="text-muted">{{ auth()->user()->email }}</p>
							</div>
							<div class="col-md-3 col-xs-6">
								<strong>Adresă</strong>
								<br>
								<p class="text-muted">{{ auth()->user()->full_name }}</p>
							</div>
						</div>
						<hr>
						<p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
							vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper
							nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
							dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
							book. It has survived not only five centuries </p>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
							with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<h4 class="font-medium m-t-30">Skill Set</h4>
						<hr>
						<h5 class="m-t-30">Wordpress
							<span class="pull-right">80%</span>
						</h5>
						<div class="progress">
							<div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
								<span class="sr-only">50% Complete</span>
							</div>
						</div>
						<h5 class="m-t-30">HTML 5
							<span class="pull-right">90%</span>
						</h5>
						<div class="progress">
							<div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;">
								<span class="sr-only">50% Complete</span>
							</div>
						</div>
						<h5 class="m-t-30">jQuery
							<span class="pull-right">50%</span>
						</h5>
						<div class="progress">
							<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
								<span class="sr-only">50% Complete</span>
							</div>
						</div>
						<h5 class="m-t-30">Photoshop
							<span class="pull-right">70%</span>
						</h5>
						<div class="progress">
							<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
								<span class="sr-only">50% Complete</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="settings" role="tabpanel">
					<div class="card-body">
						<form class="form-horizontal form-material">
							<div class="form-group">
								<label class="col-md-12">Prenume</label>
								<input type="text" name="first_name" placeholder="Prenumele dumneavoastră" class="form-control form-control-line col-md-12" value="{{ auth()->user()->first_name }}">
							</div>
							<div class="form-group">
								<label for="example-email" class="col-md-12">Email</label>
								<input type="email" placeholder="Adresa de email" class="form-control form-control-line" name="email" id="email" {{ auth()->user()->email }}>
							</div>
							<div class="form-group">
								<label class="col-md-12">Parolă</label>
								<input type="password" value="" class="form-control form-control-line">
							</div>
							<div class="form-group">
								<label class="col-md-12">Mobil</label>
								<input type="text" placeholder="Număr de telefon mobil" class="form-control form-control-line" value="{{ auth()->user()->mobile }}">
							</div>
							<div class="form-group">
								<label class="col-md-12">Telefon</label>
								<input type="text" placeholder="Număr de telefon" class="form-control form-control-line" value="{{ auth()->user()->phone }}">
							</div>
							<div class="form-group">
								<label class="col-sm-12">Select Country</label>
								<div class="col-sm-12">
									<select class="form-control form-control-line">
										<option>London</option>
										<option>India</option>
										<option>Usa</option>
										<option>Canada</option>
										<option>Thailand</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button class="btn btn-success">Salvează Profilul</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Column -->
</div>
@endsection