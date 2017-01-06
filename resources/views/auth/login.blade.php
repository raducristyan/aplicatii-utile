@extends('layouts.master')
@include('partials.message')
@section('content')
    <div class="row main-container">
        <div class="col-md-4 col-sm-8 col-md-offset-4 col-sm-offset-2">
            <div class="row">
                <a href="/">
                    <img src="/img/logo_brand.png" class="img-responsive center-block" alt="aplicatii utile">
                </a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title panel-login">Autentificare</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-lg">
                            {{-- <label class="col-md-4 control-label">Adresa de e-mail</label> --}}

                            <div class="input-group col-md-10 col-md-offset-1">
                                <span class="input-group-addon">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-lg">
                            {{-- <label class="col-md-4 control-label">Parola</label> --}}

                            <div class="input-group col-md-10 col-md-offset-1">
                                <span class="input-group-addon">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Parola">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="checkbox col-md-6 col-md-offset-1">
                                <label>
                                    <input type="checkbox" name="remember"> Autentificare automată
                                </label>
                            </div>

                            <div class="col-md-4">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Ai uitat parola?</a>
                            </div>
                        </div>
                        <br/>

                        <div class="form-group form-group-lg">
                            <div class="col-md-10 col-md-offset-1 login-register-container">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Autentificare
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
