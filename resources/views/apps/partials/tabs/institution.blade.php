<!-- forth tab -->
@admin
    <div class="tab-pane" id="institution" role="tabpanel">
        <div class="card-body">
            <form class="form-horizontal form-material">
                <div class="form-group">
                    <label class="col-md-12">Denumire</label>
                    <input type="text" name="institution" placeholder="Denumirea instituției" class="form-control form-control-line col-md-12" disabled value="{{ $institution->first()->name ?? ''}}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">CIF</label>
                    <input type="text" name="cif" placeholder="Codul fiscal" class="form-control form-control-line col-md-12" value="{{ $institution->cif ?? ''}}">
                </div>
                <div class="form-group">
                    <label for="institution-email" class="col-md-12">Email</label>
                    <input type="email" placeholder="Adresa de email" class="form-control form-control-line" name="institution-email" id="institution-email" value="{{ $institution->email ?? ''}}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Telefon</label>
                    <input type="text" placeholder="Număr de telefon" name="phone" class="form-control form-control-line" value="{{ $institution->phone ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Fax</label>
                    <input type="text" placeholder="Număr de fax" name="fax" class="form-control form-control-line" value="{{ $institution->fax ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Banca</label>
                    <input type="text" placeholder="Denumirea băncii" name="bank" class="form-control form-control-line" value="{{ $institution->bank ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">IBAN</label>
                    <input type="text" placeholder="Contul bancar" name="iban" class="form-control form-control-line" value="{{ $institution->iban ?? '' }}">
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Județul</label>
                    <div class="col-sm-12">
                        <select class="form-control form-control-line" name="county">
                            <option disabled value="">Selectați județul</option>
                            @if (isset($counties))
                                @foreach ($counties as $county)
                                    <option value="{{ $county->id}}">{{ $county->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Localitatea</label>
                    <div class="col-sm-12">
                        <select class="form-control form-control-line" name="city">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Strada</label>
                    <input type="text" placeholder="Strada" name="street" class="form-control form-control-line" value="{{ auth()->user()->institution()->first()->address->first()->street ?? ''}}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Număr stradă</label>
                    <input type="text" placeholder="Număr stradă" name="number" class="form-control form-control-line" value="{{ auth()->user()->institution()->first()->address->first()->number ?? ''}}">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Cod poștal</label>
                    <input type="text" placeholder="Codul poștal" name="postal_code" class="form-control form-control-line" value="{{ auth()->user()->institution()->first()->address->first()->postal_code ?? ''}}">
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Salvează Profilul Instituției</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endadmin
