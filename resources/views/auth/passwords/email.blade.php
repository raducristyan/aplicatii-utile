@extends('layouts.master')
@section('wrapper')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(/images/background/login-register.jpg);">        
            <div class="reset-box card">
                <div class="card-block">
                    <form class="form-horizontal" method="POST" action="{{ url('/password/email') }}" style="display: block;">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recuperare parolă</h3>
                                <p class="text-muted">Introduceți adresa de email! </p>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <form method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="email" type="email" required="" placeholder="Email" > 
                            </div>
                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block waves-effect waves-light" type="submit">
                                    <i class="fa fa-btn fa-envelope"></i>
                                    Trimite linkul pentru resetarea parolei
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
