@extends('guest.master')
@section('page-wrapper')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row justify-content-center my-50">
        <div class="col-xl-3 col-lg-5  col-sm-8 col-xs-10">
            <form class="form-horizontal" method="POST" action="{{ url('/password/email') }}" style="display: block;">
                <div class="form-group ">
                    <h3 class="text-primary">Recuperare parolă</h3>
                    <p class="text-muted">Introduceți adresa de email! </p>
                </div>
                <form method="POST" action="{{ url('/password/email') }}">
                {!! csrf_field() !!}

                <div class="form-group ">
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" required="" placeholder="Email" > 
                    @if ($errors->has('email'))
                        <span class="form-text text-warning">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group text-center m-t-20">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                        <i class="fal fa-envelope"></i>
                        Trimite linkul
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->         

@endsection
