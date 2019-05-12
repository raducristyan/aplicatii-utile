    <div class="form-group row" :class="{'has-error': person.name.hasError && !formAddPerson.isEmpty}">

        {!! Form::label('name', 'Nume', ['class' => 'col-md-3 col-form-label', 'for' => 'name']) !!}
        <div class="col-md-9">
            <input type="text" name="name" @keyup="validateFormAddPerson" v-model="person.name.val" class="form-control" id="name" placeholder="Numele persoanei..." value="{{old('name')}}" required>
        </div>

    </div>

    <div class="form-group row" :class="{'has-error': person.cnp.hasError && !formAddPerson.isEmpty}">

        {!! Form::label('cnp', 'CNP', ['class' => 'col-md-3 col-form-label', 'for' => 'cnp']) !!}
        <div class="col-md-9">
            <input type="text" name="cnp" @keyup="validateFormAddPerson" v-model="person.cnp.val" class="form-control" id="cnp" placeholder="Codul numeric personal..." value="{{old('cnp')}}" required>
        </div>

    </div>

    <div class="form-group row" :class="{'has-error': person.email.hasError && !formAddPerson.isEmpty}">

        {!! Form::label('email', 'Email', ['class' => 'col-md-3 col-form-label', 'for' => 'email']) !!}
        <div class="col-md-9">
            <input type="email" name="email" @keyup="validateFormAddPerson" v-model="person.email.val" class="form-control" id="email" placeholder="Adresa de email..." value="{{old('email')}}">
        </div>

    </div>

    <div class="form-group row">

        {!! Form::label('phone', 'Telefon', ['class' => 'col-md-3 col-form-label', 'for' => 'phone']) !!}
        <div class="col-md-9">
            <input type="number" name="phone" @keyup="validateFormAddPerson" v-model="person.phone.val" class="form-control" id="phone" placeholder="Numărul de telefon..." value="{{old('phone')}}">
        </div>

    </div>

    <div class="form-group row" :class="{'has-error': county.hasError && !formAddPerson.isEmpty}">

        {!! Form::label('county', 'Județ', ['class' => 'col-md-3 col-form-label', 'for' => 'county']) !!}
        <div class="col-md-9">
            <select  name="county" class="form-control" id="counties" v-model='selected.county' @change.prevent='getCities' required>
                @if(isset($counties))
                    @foreach($counties as $county)
                        <option value="{{$county->id}}">{{$county->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div :class="{'has-error': city.hasError && !formAddPerson.isEmpty}">
            {!! Form::label('city', 'Localitate', ['class' => 'col-md-3 col-form-label', 'for' => 'city', 'v-if' => 'showCities']) !!}
            <div class="col-md-9" v-if="showCities">
                <select name="city" class="form-control" id="city" @change="validateFormAddPerson" v-model='selected.city' required>
                    <option v-for="city in cities" track-by="$index" value="@{{city.id}}" >@{{city.name}}</option>
                </select>
            </div>
            <div class="col-md-3 loading-spin" v-show='hideCities'>
                <i class="fal fa-spinner fa-spin"></i> Loading...
            </div>
        </div>

    </div>

    <div class="form-group row" :class="{'has-error': person.street.hasError && !formAddPerson.isEmpty}">

        {!! Form::label('street', 'Stradă', ['class' => 'col-md-3 col-form-label', 'for' => 'street']) !!}
        <div class="col-md-9">
            <input type="text" name="street" @keyup="validateFormAddPerson" v-model="person.street.val" class="form-control" id="street" placeholder="Strada..." value="{{old('street')}}" required>
        </div>

    </div>

    <div class="form-group row">
        <div :class="{'has-error': person.number.hasError && !formAddPerson.isEmpty}">
            {!! Form::label('street_nr', 'Număr', ['class' => 'col-md-3 col-form-label', 'for' => 'street_nr']) !!}
            <div class="col-md-3">
                <input type="text" name="street_nr" @keyup="validateFormAddPerson" v-model="person.number.val" class="form-control" id="street_nr" placeholder="Număr stradă..." value="{{old('street_nr')}}" required>
            </div>
        </div>


        {!! Form::label('bl', 'Bl.', ['class' => 'col-md-2 col-form-label', 'for' => 'bl']) !!}
        <div class="col-md-3">
            <input type="text" name="bl" @keyup="validateFormAddPerson" v-model="person.bl.val" class="form-control" id="bl" placeholder="Bloc..." value="{{old('bl')}}">
        </div>

    </div>

    <div class="form-group row">

        {!! Form::label('sc', 'Sc.', ['class' => 'col-md-3 col-form-label', 'for' => 'sc']) !!}
        <div class="col-md-3">
            <input type="text" name="sc" @keyup="validateFormAddPerson" v-model="person.sc.val" class="form-control" id="sc" placeholder="Scara..." value="{{old('sc')}}">
        </div>


        {!! Form::label('ap', 'Ap.', ['class' => 'col-md-2 col-form-label', 'for' => 'ap']) !!}
        <div class="col-md-3">
            <input type="text" name="ap" @keyup="validateFormAddPerson" v-model="person.ap.val" class="form-control" id="ap" placeholder="Apartament..." value="{{old('ap')}}">
        </div>

    </div>

    <div class="form-group row" :class="{'has-error': person.postalCode.hasError && !formAddCompany.isEmpty}">

        {!! Form::label('postal_code', 'Cod poștal', ['class' => 'col-md-3 col-form-label', 'for' => 'postal_code']) !!}
        <div class="col-md-8">
            <input type="number" name="postal_code" @keyup="validateFormAddPerson" v-model="person.postalCode.val" class="form-control" id="postal_code" placeholder="Codul poștal..." value="{{old('postal_code')}}">
        </div>

    </div>

