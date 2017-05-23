@extends('layouts.master')

<!-- Main Content -->
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center col-md-8 offset-md-2">
            <div class="card w-75 my-5">
                <div class="card-header bg-primary text-white">Resetează parola</div>
                <div class="card-block py-4">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-10 col-form-label offset-md-1" for="email-reset-password">Adresa de e-mail</label>

                            <div class="col-md-10 offset-md-1">
                                <input id="email-reset-password" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="form-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-10 offset-md-1">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-btn fa-envelope"></i>
                                Trimite linkul pentru resetarea parolei
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
