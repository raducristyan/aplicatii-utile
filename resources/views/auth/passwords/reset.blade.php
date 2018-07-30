@extends('layouts.guest.master')
<!-- Main Content -->
@section('page-wrapper')
    
    <div class="row justify-content-center my-50">        
        <div class="col-xl-3 col-lg-5  col-sm-8 col-xs-10">
            <form class="form-horizontal form-material" role="form" method="POST" action="{{ url('/password/reset') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">
                <h3 class="text-primary m-b-20">Resetare parolă</h3>
                <div class="form-group ">
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" required="" placeholder="Email" value="{{ $email or old('email') }}">
                    @if ($errors->has('email'))
                        <span class="form-text text-warning">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group ">
                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required="" placeholder="Parola nouă">
                    @if ($errors->has('password'))
                        <span class="form-text text-warning">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group ">
                    <input class="form-control {{ $errors->has('passord_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" required="" placeholder="Confirmare parolă">
                    @if ($errors->has('password_confirmation'))
                        <span class="form-text text-warning">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group text-center m-t-20">
                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Resetează parola</button>
                </div>
                </form>
        </div>
        </div>
        
@endsection
