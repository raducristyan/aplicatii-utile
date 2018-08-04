@extends('guest.master')

@section('page-wrapper')
    <div class="row justify-content-center my-50">
        <div class="col-xl-4 col-lg-5  col-sm-8 col-xs-10">
            <form class="form-horizontal form-material" id="loginform" action="{{ url('/register') }}" method="POST">
                {!! csrf_field() !!}
                <h2 class="text-primary m-b-20">Înregistrare</h3>
                <div class="form-group">
                    <label for="institution">Instituția</label>
                    <input id="institution" class="form-control {{ $errors->has('institution') ? ' is-invalid' : '' }}" type="text" name="institution" value="{{ old('institution') }}" required="required" placeholder=" Denumirea instituției">
                    @if ($errors->has('institution'))
                        <span class="form-text text-warning">
                            {{ $errors->first('institution') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cif">CIF</label>
                    <input id="cif" class="form-control {{ $errors->has('cif') ? ' is-invalid' : '' }}" type="number" name="cif" value="{{ old('cif') }}" required="required" placeholder="Cod de identificare fiscală" min="0">
                    @if ($errors->has('cif'))
                        <span class="form-text text-warning">
                            {{ $errors->first('cif') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required="required" placeholder="Adresa de email">
                    @if ($errors->has('email'))
                        <span class="form-text text-warning">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="first_name">Prenume</label>
                    <input id="first_name" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" value="{{ old('first_name') }}" required="required" placeholder="Prenume adminstrator cont">
                    @if ($errors->has('first_name'))
                        <span class="form-text text-warning">
                            {{ $errors->first('first_name') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="last_name">Nume</label>
                    <input id="last_name" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ old('last_name') }}" required="required" placeholder="Nume administrator cont">
                    @if ($errors->has('last_name'))
                        <span class="form-text text-warning">
                            {{ $errors->first('last_name') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Parola</label>
                    <input id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required="required" placeholder="Parola">
                    @if ($errors->has('password'))
                        <span class="form-text text-warning">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmare parolă</label>
                    <input id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" required="required" placeholder="Confirmare parolă">
                    @if ($errors->has('password_confirmation'))
                        <span class="form-text text-warning">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                </div>
                {{--  <div class="form-group">
                    <div class="checkbox checkbox-success p-t-0 p-l-10">
                        <input id="checkbox-signup" name="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup"> Sunt de acord cu <a href="#">Termenii și condițiile</a></label>
                    </div>
                </div>  --}}
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">Crează contul</button>
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
    
@endsection
