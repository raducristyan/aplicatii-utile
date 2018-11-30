<!-- third tab -->
<div class="tab-pane" id="settings" role="tabpanel">
    <div class="card-body">
        <form class="form-horizontal form-material">
            <div class="form-group">
                <label class="col-md-12">Prenume</label>
                <input type="text" name="first_name" placeholder="Prenumele dumneavoastră" class="form-control form-control-line col-md-12" value="{{ auth()->user()->first_name }}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Nume</label>
                <input type="text" name="last_name" placeholder="Numele dumneavoastră" class="form-control form-control-line col-md-12" value="{{ auth()->user()->last_name }}">
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <input type="email" placeholder="Adresa de email" class="form-control form-control-line" name="email" id="email" disabled value="{{ auth()->user()->email }}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Mobil</label>
                <input type="text" placeholder="Număr de telefon mobil" name="mobile" class="form-control form-control-line" value="{{ auth()->user()->mobile }}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Telefon</label>
                <input type="text" placeholder="Număr de telefon" name="phone" class="form-control form-control-line" value="{{ auth()->user()->phone }}">
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
                <input type="text" placeholder="Strada" name="street" class="form-control form-control-line" value="{{ auth()->user()->address->first()->street ?? ''}}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Număr stradă</label>
                <input type="text" placeholder="Număr stradă" name="number" class="form-control form-control-line" value="{{ auth()->user()->address->first()->number ?? ''}}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Bloc</label>
                <input type="text" placeholder="Bloc" name="bl" class="form-control form-control-line" value="{{ auth()->user()->address->first()->bl ?? ''}}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Scară</label>
                <input type="text" placeholder="Scară" name="sc" class="form-control form-control-line" value="{{ auth()->user()->address->first()->sc ?? ''}}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Apartament</label>
                <input type="text" placeholder="Apartament" name="ap" class="form-control form-control-line" value="{{ auth()->user()->address->first()->ap ?? ''}}">
            </div>
            <div class="form-group">
                <label class="col-md-12">Cod poștal</label>
                <input type="text" placeholder="Codul poștal" name="postal_code" class="form-control form-control-line" value="{{ auth()->user()->address->first()->postal_code ?? ''}}">
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success">Salvează Profilul</button>
                </div>
            </div>
        </form>
        <form class="form-horizontal form-material">
            <div class="form-group">
                <label class="col-md-12">Parolă</label>
                <input type="password" value="" placeholder="*******" class="form-control form-control-line">
            </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success">Modifică parola</button>
                </div>
            </div>
        </form>
    </div>
</div>