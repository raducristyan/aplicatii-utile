<!-- forth tab -->
@admin
<div class="tab-pane" id="institution" role="tabpanel">
    <div class="card-body">
        <h3>Profil instituție</h3>
        <hr class="py-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Denumire:</span>
                        <span name="institution" class="col-md-12">{{ $institution->first()->name ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">CIF:</span>
                        <span name="cif">{{ $institution->cif ?? ''}}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Email:</span>
                        <span name="institution-email">{{ $institution->email ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Telefon:</span>
                        <span name="phone">{{ $institution->phone ?? '' }}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Fax:</span>
                        <span name="fax">{{ $institution->fax ?? '' }}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Banca:</span>
                        <span name="bank">{{ $institution->bank ?? '' }}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">IBAN:</span>
                        <span name="iban">{{ $institution->iban ?? '' }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-md-10">
                    <div class="text-right">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editInstitutionProfile">Editează profilul</button>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="pt-2">Adresă instituție</h3>
        <hr class="py-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Județul:</span>
                        <span name="county">
                            @if (auth()->user()->institution()->first()->address->first())
                            {{ auth()->user()->institution()->first()->address->first()->village()->city()->county()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea:</span>
                        <span name="city">
                            @if (auth()->user()->institution()->first()->address->first())
                            {{ auth()->user()->institution()->first()->address->first()->village()->city()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea componentă:</span>
                        <span name="village">
                            @if (auth()->user()->institution()->first()->address->first())
                            {{ auth()->user()->institution()->first()->address->first()->village()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Strada:</span>
                        <span name="street">{{ auth()->user()->institution()->first()->address->first()->street ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Număr stradă:</span>
                        <span name="number">{{ auth()->user()->institution()->first()->address->first()->number ?? ''}}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Cod poștal:</span>
                        <span name="postal_code">{{ auth()->user()->institution()->first()->address->first()->postal_code ?? ''}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-md-10">
                    <div class="text-right">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editUserAddress">Editează adresa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endadmin 