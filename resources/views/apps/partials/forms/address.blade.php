<form class="flex flex-col w-5/6 mx-auto">
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Județul</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="county" v-model="selectedCounty" @change="getCities">
                <option disabled value>Selectați județul</option>
                <option v-for="county in counties" :value="county.id" :selected="county.id == selectedCounty" v-text="county.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small id="countylHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Localitatea (UAT)</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="city" v-model="selectedCity" @change="getVillages">
                <option v-for="city in countyCities" :value="city.id" :selected="city.id == city" v-text="city.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small id="countylHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Localitatea componentă</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="village" v-model="address.village_id">
                <option v-for="village in cityVillages" :value="village.id" :selected="village.id == village" v-text="village.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small id="countylHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
</form>

{{-- <div class="modal fade" :id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Editează adresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Județul</label>
                        <div>
                            <select class="form-control" name="county" v-model="county" @change="getCities">
                                <option disabled value>Selectați județul</option>
                                <option v-for="county in counties" :value="county.id" :selected="county.id == county">@{{ county.name }}</option>
</select>
</div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-sm-12">Localitatea (UAT)</label>
        <div>
            <select class="form-control" name="city" v-model="city" @change="getVillages">
                <option v-for="city in countyCities" :value="city.id" :selected="city.id == city">@{{ city.name }}</option>
            </select>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="col-sm-12">Localitatea componentă</label>
        <div>
            <select class="form-control" name="village" v-model="address.village_id">
                <option v-for="village in cityVillages" :value="village.id" :selected="village.id == village">@{{ village.name }}</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label class="col-md-12">Strada</label>
        <input type="text" name="street" class="form-control" v-model="address.street" />
    </div>
    <div class="form-group col-md-6">
        <label class="col-md-12">Număr stradă</label>
        <input type="text" name="number" class="form-control" v-model="address.number" />
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-md-12">Bloc</label>
        <input type="text" name="bl" class="form-control" v-model="address.bl" />
    </div>
    <div class="form-group col-md-6">
        <label class="col-md-12">Scară</label>
        <input type="text" name="sc" class="form-control" v-model="address.sc" />
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-md-12 col-md-6">Apartament</label>
        <input type="text" name="ap" class="form-control" v-model="address.ap" />
    </div>
    <div class="form-group col-md-6">
        <label class="col-md-12 col-md-6">Cod poștal</label>
        <input type="text" name="postal_code" class="form-control" v-model="address.postal_code" />
    </div>
</div>
</form>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-success" @click="updateAddress" :disabled="canUpdate">Salvează</button>
    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
</div>
</div>
</div>
</div> --}}