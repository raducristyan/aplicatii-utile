@extends('guest.master')

<!-- Main Content -->
@section('page-wrapper')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid"> 
    <div class="row justify-content-center my-50">
        <div class="col-xl-3 col-lg-5  col-sm-8 col-xs-10">
            <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <h2 class="text-primary m-b-20">Autentificare</h3>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" required="" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
                    @if ($errors->has('email'))
                        <span class="form-text text-warning">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Parola</label>
                    <input id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required="" placeholder="Introduceți parola">
                    @if ($errors->has('password'))
                        <span class="form-text text-warning">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Autentificare automată </label>
                        </div> <a href="{{ route('password.request') }}" class="text-dark pull-right"><i class="fal fa-lock-open m-r-5"></i> Ai uitat parola?</a> 
                    </div>
                </div>
                <div class="form-group text-center mt-5">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-md btn-block waves-effect waves-light" type="submit">Login</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Nu ai cont? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Creare cont</b></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->         
@endsection

