@extends('layouts.master')

@section('wrapper')
    <section id="wrapper">
        <div class="login-register register bg-img">        
            <div class="login-box register-box card">
                <div class="card-block">
                    <form class="form-horizontal form-material" id="loginform" action="{{ url('/register') }}" method="POST">
                        {!! csrf_field() !!}
                        <h3 class="box-title m-b-20">Înregistrare</h3>
                        <div class="form-group {{ $errors->has('institution') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="institution" value="{{ old('institution') }}" required="required" placeholder="Instituție">
                                @if ($errors->has('institution'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('institution') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cif') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="number" name="cif" value="{{ old('cif') }}" required="required" placeholder="CIF" min="0">
                                @if ($errors->has('cif'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('cif') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}" required="required" placeholder="Adresa de email">
                                @if ($errors->has('email'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required="required" placeholder="Prenume">
                                @if ($errors->has('first_name'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('first_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required="required" placeholder="Nume">
                                @if ($errors->has('last_name'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="required" placeholder="Parola">
                                @if ($errors->has('password'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password_confirmation" required="required" placeholder="Confirmare parola">
                                @if ($errors->has('password_confirmation'))
                                    <span class="form-text text-muted">
                                        {{ $errors->first('password_confirmation') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--  <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success p-t-0 p-l-10">
                                    <input id="checkbox-signup" name="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Sunt de acord cu <a href="#">Termenii și condițiile</a></label>
                                </div>
                            </div>
                        </div>  --}}
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Crează contul</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Ai deja un cont? <a href="{{route('login')}}" class="text-info m-l-5"><b>Autentificare</b></a></p>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </section>

@endsection
