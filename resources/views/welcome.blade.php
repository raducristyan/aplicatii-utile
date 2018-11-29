@extends('guest.master')

    @section('page-wrapper')

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="fix-width">
            <div class="row justify-content-center banner-text">
                <div class="col-md-10 m-b-20">
                    <h1>Aplicatii utile</h1>
                    <p class="subtext">
                        <span class="font-medium">Toate aplicatiile de care ai nevoie, într-un singur loc. </span>
                        <span class="font-medium text-info">Împreună facem lucrurile mai simple!</span>
                    </p>
                    <div class="down-btn"> 
                        <a href="{{ route('register') }}" class="btn btn-rounded btn-info m-b-10">ÎNREGISTRARE</a> 
                        <a href="{{ route('login') }}" class="btn btn-rounded btn-success m-b-10">AUTENTIFICARE</a> 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="hero-banner m-t-30"> <img src="assets/images/hero.jpg" class="img-responsive" alt="Monster admin template" /> </div>
                </div>
            </div>
        </div>
                
    @endsection
