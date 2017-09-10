@extends('layouts.master')

<!-- Main Content -->
@section('wrapper')
    <section id="wrapper">
        <div class="login-register login">        
            <div class="login-register-box login-box card">
            <div class="card-block">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <h3 class="box-title m-b-20">Autentificare</h3>
                    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="email" required="" placeholder="Email" value="{{ old('email')}}">
                        </div>
                        @if ($errors->has('email'))
                            <span class="form-text text-muted">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Parola">
                        </div>
                        @if ($errors->has('password'))
                            <span class="form-text text-muted">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Autentificare automată </label>
                            </div> <a href="{{ route('password.request') }}" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Ai uitat parola?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Autentificare</button>
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
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection

