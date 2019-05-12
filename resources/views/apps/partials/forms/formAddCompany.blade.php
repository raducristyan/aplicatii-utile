    <div class="form-group" :class="{'has-error': company.name.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('company_name', 'Denumire', ['class' => 'col-md-3 control-label', 'for' => 'company_name']) !!}
        <div class="col-md-8">
            <input type="text" name="company_name" @keyup="validateFormAddCompany" v-model="company.name.val" class="form-control" id="company_name" placeholder="Numele firmei..." value="{{old('company_name')}}" required>
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.cif.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('cif', 'Cod fiscal', ['class' => 'col-md-3 control-label', 'for' => 'cif']) !!}
        <div class="col-md-8">
            <input type="text" name="cif" @keyup="validateFormAddCompany" v-model="company.cif.val" class="form-control" id="cif" placeholder="Codul fiscal..." value="{{old('cif')}}" required>
        </div>

    </div>

    <div class="form-group">

        {!! Form::label('j', 'Registrul Comerțului', ['class' => 'col-md-3 control-label', 'for' => 'j']) !!}
        <div class="col-md-8">
            <input type="text" name="j" @keyup="validateFormAddCompany" v-model="company.j.val" class="form-control" id="j" placeholder="Număr de înregistrare Registrul Comerțului..." value="{{old('j')}}" >
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.email.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label', 'for' => 'company_email']) !!}
        <div class="col-md-8">
            <input type="email" name="company_email" @keyup="validateFormAddCompany" v-model="company.email.val" class="form-control" id="company_email" placeholder="Adresa de email..." value="{{old('company_email')}}" >
        </div>

    </div>

    <div class="form-group">

        {!! Form::label('company_phone', 'Telefon', ['class' => 'col-md-3 control-label', 'for' => 'company_phone']) !!}
        <div class="col-md-8">
            <input type="number" name="company_phone" @keyup="validateFormAddCompany" v-model="company.phone.val" class="form-control" id="phone" placeholder="Numărul de telefon..." value="{{old('company_phone')}}" >
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.authorized.name.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('authorized_name', 'Reprezentant', ['class' => 'col-md-3 control-label', 'for' => 'authorized_name']) !!}
        <div class="col-md-8">
            <input type="text" name="authorized_name" @keyup="validateFormAddCompany" v-model="company.authorized.name.val" class="form-control" id="authorized_name" placeholder="Numele reprezentantului..." value="{{old('authorized_name')}}" required>
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.authorized.cnp.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('authorized_cnp', 'CNP', ['class' => 'col-md-3 control-label', 'for' => 'authorized_cnp']) !!}
        <div class="col-md-8">
            <input type="text" name="authorized_cnp" @keyup="validateFormAddCompany" v-model="company.authorized.cnp.val" class="form-control" id="authorized_cnp" placeholder="Codul numeric personal..." value="{{old('authorized_cnp')}}" required>
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.iban.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('iban', 'Cont bancă', ['class' => 'col-md-3 control-label', 'for' => 'iban']) !!}
        <div class="col-md-8">
            <input type="text" name="iban" @keyup="validateFormAddCompany" v-model="company.iban.val" class="form-control" id="iban" placeholder="Contul iban..." value="{{old('iban')}}" >
        </div>

    </div>

    <div class="form-group" :class="{'has-error': company.bank.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('bank', 'Bancă', ['class' => 'col-md-3 control-label', 'for' => 'bank']) !!}
        <div class="col-md-8">
            <input type="text" name="bank" @keyup="validateFormAddCompany" v-model="company.bank.val" class="form-control" id="bank" placeholder="Banca..." value="{{old('bank')}}" >
        </div>

    </div>

    <div class="form-group" :class="{'has-error': county.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('county', 'Județ', ['class' => 'col-md-3 control-label', 'for' => 'county']) !!}
        <div class="col-md-3">
            <select  name="county" class="form-control" id="counties" v-model='selected.county' @change.prevent='getCities' required>
                @if(isset($counties))
                    @foreach($counties as $county)
                        <option value="{{$county->id}}" @if (old('county') === $county->id) selected @endif>{{$county->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div :class="{'has-error': city.hasError && !formAddCompany.isEmpty}">
                {!! Form::label('city', 'Localitate', ['class' => 'col-md-2 control-label', 'for' => 'city', 'v-if' => 'showCities']) !!}
                <div class="col-md-3" v-if="showCities">
                    <select name="city" class="form-control" id="city" @change="validateFormAddCompany" v-model='selected.city' required>
                        <option v-for="city in cities" track-by="$index" value="@{{city.id}}" >@{{city.name}}</option>
                    </select>
                </div>
                <div class="col-md-3 loading-spin" v-show='hideCities'>
                    <i class="fal fa-spinner fa-spin"></i> Loading...
                </div>
            </div>

        </div>

        <div class="form-group" :class="{'has-error': company.street.hasError && !formAddCompany.isEmpty}">

            {!! Form::label('street', 'Stradă', ['class' => 'col-md-3 control-label', 'for' => 'street']) !!}
            <div class="col-md-8">
                <input type="text" name="company_street" @keyup="validateFormAddCompany" v-model="company.street.val" class="form-control" id="street" placeholder="Strada..." value="{{old('company_street')}}" required>
            </div>

        </div>

        <div class="form-group">
            <div :class="{'has-error': company.number.hasError && !formAddCompany.isEmpty}">
                {!! Form::label('street_nr', 'Număr', ['class' => 'col-md-3 control-label', 'for' => 'street_nr']) !!}
                <div class="col-md-3">
                    <input type="text" name="company_street_nr" @keyup="validateFormAddCompany" v-model="company.number.val" class="form-control" id="street_nr" placeholder="Număr stradă..." value="{{old('company_street_nr')}}" required>
                </div>
            </div>

            {!! Form::label('bl', 'Bl.', ['class' => 'col-md-2 control-label', 'for' => 'bl']) !!}
            <div class="col-md-3">
                <input type="text" name="company_bl" @keyup="validateFormAddCompany" v-model="company.bl.val" class="form-control" id="bl" placeholder="Bloc..." value="{{old('company_bl')}}" >
            </div>

        </div>

        <div class="form-group">

            {!! Form::label('sc', 'Sc.', ['class' => 'col-md-3 control-label', 'for' => 'sc']) !!}
            <div class="col-md-3">
                <input type="text" name="company_sc" @keyup="validateFormAddCompany" v-model="company.sc.val" class="form-control" id="sc" placeholder="Scara..." value="{{old('company_sc')}}" >
            </div>

            {!! Form::label('ap', 'Ap.', ['class' => 'col-md-2 control-label', 'for' => 'ap']) !!}
            <div class="col-md-3">
                <input type="text" name="company_ap" @keyup="validateFormAddCompany" v-model="company.ap.val" class="form-control" id="ap" placeholder="Apartament..." value="{{old('company_ap')}}" >
            </div>

        </div>

        <div class="form-group" :class="{'has-error': company.postalCode.hasError && !formAddCompany.isEmpty}">

            {!! Form::label('postal_code', 'Cod poștal', ['class' => 'col-md-3 control-label', 'for' => 'postal_code']) !!}
            <div class="col-md-8">
                <input type="number" name="company_postal_code" @keyup="validateFormAddCompany" v-model="company.postalCode.val" class="form-control" id="postal_code" placeholder="Codul poștal..." value="{{old('company_postal_code')}}" >
            </div>

        </div>
    </div>

