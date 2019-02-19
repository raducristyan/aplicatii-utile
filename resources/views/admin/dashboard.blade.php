@extends('admin.layout')

@section('page-wrapper')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Aplicațiile mele
                    </h3>
                </div>

                <div class="card">
                    Sunteți autentificat!
                    @if (isset($data)) $data @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
