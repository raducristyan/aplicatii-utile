<template>
    <div class="form-group">
        <label class="col-sm-12">Localitatea</label>
        <div class="col-sm-12">
            <select class="form-control form-control-line" name="city" v-model="selectedCity">
            <option v-for="city in cities" :value="city.id">
                {{ city.name }}
            </option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Address',
    props: ['selectedCounty', 'cities'],
    data() {
        return {
            selectedCity: ''
        };
    }
}
</script>

