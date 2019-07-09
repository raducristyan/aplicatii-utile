<form>
    <div class="form-group">
        <label>Județul</label>
        <div>
            <select class="form-control" name="county" v-model="county" @change="getCities">
                <option disabled value="">Selectați județul</option>
                @if (isset($counties))
                @foreach ($counties as $county)
                <option value="{{ $county->id}}">{{ $county->name }}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
    <village-view :selected-county="county" :cities="countyCities" v-on:update-village="getVillageId($event)">

    </village-view>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="col-md-12">Strada</label>
            <input type="text" name="street" class="form-control" v-model="forms.address.street" >
        </div>
        <div class="form-group col-md-6">
            <label class="col-md-12">Număr stradă</label>
            <input type="text" name="number" class="form-control" v-model="forms.address.number" >
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="col-md-12">Bloc</label>
            <input type="text" name="bl" class="form-control" v-model="forms.address.bl" >
        </div>
        <div class="form-group col-md-6">
            <label class="col-md-12">Scară</label>
            <input type="text" name="sc" class="form-control" v-model="forms.address.sc" >
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="col-md-12 col-md-6">Apartament</label>
            <input type="text" name="ap" class="form-control" v-model="forms.address.ap" >
        </div>
        <div class="form-group col-md-6">
            <label class="col-md-12 col-md-6">Cod poștal</label>
            <input type="text" name="postal_code" class="form-control" v-model="forms.address.postal_code" >
        </div>
    </div>
</form> 