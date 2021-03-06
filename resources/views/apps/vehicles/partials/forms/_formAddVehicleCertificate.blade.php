<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card-body">
                        <h3 class="card-title">Adaugă un vehicul nou</h3>
                        {!! Form::open(['method' => 'POST', 'route' => 'apps.vehicles.store']) !!}

                        <div class="form-group row">
                            {!! Form::label('person', 'Tip persoană', ['class' => 'col-md-2 offset-md-2 col-form-label']) !!}
                            <div class="col-md-6" id="owner_type">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active" @click="setTypePerson">
                                        <input type="radio" name="owner_type" id="person" value="person" autocomplete="off" :checked="type.person"> Persoană fizică
                                    </label>

                                    <label class="btn btn-primary" @click="setTypeCompany">
                                        <input type="radio" name="owner_type" id="company" value="company" autocomplete="off" :checked="type.company"> Persoană juridică
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('people_list', 'Persoana', ['class' => 'col-md-3 col-form-label']) !!}
                            <div class="col-md-8">
                                @if (isset($people)) @if (count($people) > 0)
                                <select class="form-control" id="people_list" , name="person">
                                    <option value="" class="text-muted">-- Selectați o persoană --</option>
                                    @foreach ($people as $person)
                                    <option value="{{$person->id}}" @if (old('person')===$person->id)) selected @endif>{{$person->full_name}}</option>
                                    @endforeach
                                </select> @else {!!Form::select('person', [], null, ['id' => 'people_list', 'class'
                                => 'form-control', 'placeholder' => 'Adăugați o persoană nouă...']) !!} @endif @endif
                            </div>
                            <div class="col-md-1">
                                <span data-toggle="tooltip" data-placement="right" title="Adaugă persoana">
                                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-people">
                                        <i class="fal fa-plus-circle"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row" id="company-field" :class="{'show-company': type.company}" v-if="type.company">
                            {!! Form::label('companies_list', 'Firma', ['class' => 'col-md-3 col-form-label']) !!}
                            <div class="col-md-7">
                                @if (isset($companies)) @if (count($companies) > 0)
                                <select class="form-control" id="companies_list" , name="company">
                                    @foreach ($companies as $company)
                                    <option value="{{$company->id}}" @if (old('company')===$company->id) selected @endif>{{$company->name}}</option>
                                    @endforeach
                                </select> @else {!!Form::select('company', [], null, ['id' => 'companies_list',
                                'class' => 'form-control', 'placeholder' => 'Adăugați o firmă nouă...']) !!} @endif @endif
                            </div>
                            <div class="col-md-1">
                                <span data-toggle="tooltip" data-placement="right" title="Adaugă firma">
                                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-companies">
                                        <i class="fal fa-plus-circle"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('category', 'Categorie', ['for' => 'category', 'class' => 'col-md-3 col-form-label']) !!}
                            <div class="col-md-7">
                                @if (isset($vehicleCategories)) @if (count($vehicleCategories) > 0)
                                <select class="form-control" id="category" name="category">
                                    @foreach ($vehicleCategories as $category)
                                    <option value="{{$category->id}}" @if (old('category')===$category->id) selected @endif>{{$category->category}}</option>
                                    @endforeach
                                </select> @else {!!Form::select('category', [], null, ['id' => 'category',
                                'class' => 'form-control', 'placeholder' => 'Adăugați o categorie nouă...']) !!} @endif @endif
                            </div>
                            <div class="col-md-1">
                                <span data-toggle="tooltip" data-placement="right" title="Adaugă categorie">
                                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-categories">
                                        <i class="fal fa-plus-circle"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('mark', 'Marca', ['for' => 'mark', 'class' => 'col-md-3 col-form-label']) !!}
                            <div class="col-md-7">
                                @if (isset($marks)) @if (count($marks) > 0)
                                <select class="form-control" id="mark" name="mark">
                                    @foreach ($marks as $mark)
                                    <option value="{{$mark->id}}" @if (old('mark')===$mark->id) selected @endif>{{$mark->mark}}</option>
                                    @endforeach
                                </select> @else {!!Form::select('mark', [], null, ['id' => 'mark',
                                'class' => 'form-control', 'placeholder' => 'Adăugați o marcă nouă...']) !!} @endif @endif
                            </div>
                            <div class="col-md-1">
                                <span data-toggle="tooltip" data-placement="right" title="Adaugă marca">
                                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add-marks">
                                        <i class="fal fa-plus-circle"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('mark_type', 'Tip', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('mark_type', null, ['id' => 'mark_type', 'class' => 'form-control', 'placeholder' => 'Tipul vehicolului...',
                                'value' => '{{old("mark_type")}}']) !!}
                            </div>

                        </div>

                        <div class="form-group row">
                            {!! Form::label('displacement', 'Cilindree', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('displacement', null, ['class' => 'form-control', 'placeholder' => 'Cilindreea vehicolului...', 'value' =>
                                '{{old("displacement")}}']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('hp', 'Putere', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('hp', null, ['class' => 'form-control', 'placeholder' => 'Puterea vehicolului...', 'value' => '{{old("hp")}}'])
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('engine_series', 'Serie motor', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('engine_series', null, ['class' => 'form-control', 'placeholder' => 'Serie motor...', 'value' => '{{old("engine_series")}}'])
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('chassis_series', 'Serie șasiu', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('chassis_series', null, ['class' => 'form-control', 'placeholder' => 'Serie șasiu...', 'value' => '{{old("chassis_series")}}'])
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('color', 'Culoare', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Culoarea vehicolului...', 'value' => '{{old("color")}}'])
                                !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('card_series', 'Serie carte de identitate', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('card_series', null, ['class' => 'form-control', 'placeholder' => 'Serie carte de identitate a vehicolului...',
                                'value' => '{{old("card_series")}}']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('card_number', 'Număr carte de identitate', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('card_number', null, ['class' => 'form-control', 'placeholder' => 'Număr carte de identitate a vehicolului...', 'value' => '{{old("card_number")}}']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('registration_number', 'Număr de înregistrare', ['class' => 'col-md-3 col-form-label']) !!}

                            <div class="col-md-7">
                                {!! Form::text('registration_number', null, ['class' => 'form-control', 'placeholder' => 'Numărul de înregistrare atribuit vehicolului...', 'value' => '{{old("registration_number")}}']) !!}
                            </div>
                        </div>

                        <div class="form-group row d-flex flex-row-reverse">
                            <div class="">
                                {!! Form::reset("Resetează", ['class' => 'btn btn-warning']) !!}
                                {!! Form::submit("Adaugă", ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



@include('partials.modals._modalAddPerson')
@include('partials.modals._modalAddCompany')
@include('apps.vehicles.partials.modals._modalAddCategory')