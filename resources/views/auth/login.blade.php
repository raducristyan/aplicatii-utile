@extends('layouts.master')
@include('partials.message')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center col-md-8 col-lg-6 offset-md-2 offset-lg-3">
            <a class="my-4" href="/">
                <img src="/img/logo_brand.png" class="img-fluid mx-auto login-img-brand" alt="aplicatii utile">
            </a>

            <div class="card px-1 py-1 mb-4">
                <div class="card-block mx-auto">
                    <h2 class="card-title text-primary">Autentificare</h2>
                </div>
                <div class="card-block">
                    <form method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} form-control-lg">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            </div>
                                @if ($errors->has('email'))
                                    <span class="form-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }} form-control-lg">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Parola">
                            </div>

                                @if ($errors->has('password'))
                                    <span class="form-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="row mx-0 px-4">
                            <div class="form-check mt-2 mr-sm-2 mb-sm-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Autentificare automată
                                </label>
                            </div>

                            <div>
                                <a class="btn btn-link pwd-forgot" href="{{ url('/password/reset') }}">Ai uitat parola?</a>
                            </div>
                        </div>
                        <br/>

                        <div class="form-group form-control-lg">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Autentificare
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
