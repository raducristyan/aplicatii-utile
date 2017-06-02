@extends('layouts.master')

@section(@content)
<div class="container-fluid">
    <div class="row justify-content-center col-md-8 col-lg-8 offset-md-2 offset-lg-2">
        @include('partials.message')

        <div class="card w-75 my-4 px-2">
            <div class="card-block mx-auto">
                <h3 class="text-primary">Contact</h3>
            </div>
            <div class="card-block">
                <form method="POST" role="form" action="{{route('contact.send')}}">
                {!! csrf_field() !!}
                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <label class="col-md-3 col-form-label offset-1" for="contact-email">Adresa de e-mail</label>
                        <div class="col-md-7">
                            <input id="contact-email" type="email" class="form-control" name="email" value="@if (Auth::check()) {{Auth::user()->email}} @else {{old('email')}} @endif" required="required" @if (! Auth::check()) autofocus @endif>

                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>

                    <div class="row form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-1" for="message-subject">Subiect</label>
                        <div class="col-md-7">
                            <input id="message-subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" min="3" max="60" required="required" @if (Auth::check()) autofocus @endif>

                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label class="col-md-3 col-form-label offset-1" for="message-body">Mesaj</label>
                        <div class="col-md-7">
                            <textarea id="message-body" class="form-control" name="body" rows="5"  value="{{ old('body') }}" minlength="15" maxlength="1000" required="required"></textarea>

                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group col-6 offset-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-envelope"></i> Trimite mesajul
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
