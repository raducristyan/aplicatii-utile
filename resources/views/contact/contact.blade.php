@extends('layouts.master')

@section(@content)

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        @include('partials.errors')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" role="form" action="{{route('contact')}}">
                    {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label class="col-md-4 control-label" for="email">Adresa de e-mail</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Adresa dumneavoastră de email" value="@if (Auth::check()) {{Auth::user()->email}} @else {{old('email')}} @endif" required="required" @if (! Auth::check()) autofocus @endif>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="subject">Subiect</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subject" placeholder="Subiectul mesajului" value="{{ old('subject') }}" min="5" max="60" required="required" @if (Auth::check()) autofocus @endif>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="body">Mesaj</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="body" rows="5" placeholder="Conținutul mesajului" value="{{ old('body') }}" minlength="15" maxlength="1000" required="required"></textarea>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-envelope"></i> Trimite mesajul
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
