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
                        <span name="institution" class="col-md-12">{{ $institution->name ?? ''}}</span>
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
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->county->name ?? ''}}
                            @endif </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea:</span>
                        <span name="city">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea componentă:</span>
                        <span name="village">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->name ?? ''}}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Strada:</span>
                        @if ( $institution->address !== null )
                        <span name="street">{{ $institution->address[0]->street ?? ''}}</span>
                        @endif
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Număr stradă:</span>
                        @if ( $institution->address !== null )
                        <span name="number">{{ $institution->address[0]->number ?? ''}}</span>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Cod poștal:</span>
                        @if ( $institution->address !== null )
                        <span name="postal_code">{{ $institution->address[0]->postal_code ?? ''}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-md-10">
                    <div class="text-right">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editInstitutionAddress">Editează adresa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endadmin