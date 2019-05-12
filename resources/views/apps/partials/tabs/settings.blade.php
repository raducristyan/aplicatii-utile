<!-- third tab -->
<div class="tab-pane" id="settings" role="tabpanel">
    <div class="card-body">
    <h3>Parola</h3>
        <hr class="py-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Parola:</span>
                        <span name="password">*******</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-md-10">
                    <div class="text-right">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editUserPassword">Schimbă parola</button>
                    </div>
                </div>
            </div>
        </div>
        <h3>Profil</h3>
        <hr class="py-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Prenume:</span>
                        <span name="first_name">{{ auth()->user()->first_name ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Nume:</span>
                        <span name="last_name">{{ auth()->user()->last_name ?? ''}}</span>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Email:</span>
                        <span name="email">{{ auth()->user()->email ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Telefon mobil:</span>
                        <span name="mobile">{{ auth()->user()->mobile ?? '' }}</span>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Telefon:</span>
                        <span name="phone">{{ auth()->user()->phone ?? '' }}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Funcție:</span>
                        <span name="job">{{ auth()->user()->job ?? '' }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-md-10">
                    <div class="text-right">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#editUserProfile">Editează profilul</button>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="pt-2">Adresa</h3>
        <hr class="py-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Județul:</span>
                        <span name="county">
                            @if (auth()->user()->address->first())
                            {{ auth()->user()->address->first()->village()->city()->county()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea:</span>
                        <span name="city">
                            @if (auth()->user()->address->first())
                            {{ auth()->user()->address->first()->village()->city()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Localitatea componentă:</span>
                        <span name="village">
                            @if (auth()->user()->address->first())
                            {{ auth()->user()->address->first()->village()->name ?? ''}}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Strada:</span>
                        <span name="street">{{ auth()->user()->address->first()->street ?? ''}}</span>
                    </div>
                    <div class="col-md-10">
                        <span class="text-muted">Număr stradă:</span>
                        <span name="number">{{ auth()->user()->address->first()->number ?? ''}}</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <span class="text-muted">Cod poștal:</span>
                        <span name="postal_code">{{ auth()->user()->address->first()->postal_code ?? ''}}</span>
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
