@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center col-lg-8 col-md-10 col-sm-10 offset-lg-2 offset-md-1 offset-sm-1">
        <div class="card my-4 w-75">
            <div class="card-block mx-auto">
                <h2 class="card-title text-primary">Înregistrare</h2>
            </div>
            <div class="card-block">
                <form method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="row form-group{{ $errors->has('institution') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Instituția</label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="institution" value="{{ old('institution') }}">

                            @if ($errors->has('institution'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('institution') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('cif') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">CIF</label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="cif" value="{{ old('cif') }}">

                            @if ($errors->has('cif'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('cif') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Adresa de e-mail</label>

                        <div class="col-md-7">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Prenume</label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                            @if ($errors->has('first_name'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Nume</label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                            @if ($errors->has('last_name'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Parola</label>

                        <div class="col-md-7">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-md-1">Confirmați parola</label>

                        <div class="col-md-7">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-10 offset-md-1">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-user-plus"></i> Înregistrare
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection
