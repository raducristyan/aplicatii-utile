@extends('guest.master')

@section('page-wrapper')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid section-1">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="fix-width">
        <div class="row justify-content-center banner-text">
            <div class="col-md-7 m-b-20 left-side">
                <p>
                    <img class="hexagon-logo" src="./assets/images/icon/logo-hexagon.svg" alt="Aplicații utile">
                </p>
                <h1 class="app-text">Aplicatii utile</h1>
                <p class="subtext">
                    <span class="font-medium text-info">Împreună facem lucrurile mai simple!</span>
                </p>
                <div class="down-btn">
                    <a href="{{ route('register') }}" class="btn btn-lg btn-primary m-b-10">ÎNREGISTRARE</a>
                </div>
            </div>
            <div class="col-md-5 m-b-20 right-side">
                <img class="hexagon-img" src="./assets/images/background/hexagon-bkg.svg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection