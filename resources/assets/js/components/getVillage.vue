<template>
  <div class="row">
    <div class="form-group col-md-6">
      <label class="col-sm-12">Localitatea (UAT)</label>
      <div>
        <select
          class="form-control"
          name="city"
          v-model="selectedCity"
          @change="getVillages"
        >
          <option v-for="city in cities" :value="city.id">{{ city.name }}</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label class="col-sm-12">Localitatea componentă</label>
      <div>
        <select class="form-control" name="village" v-model="selectedVillage" @click="updateVillageId">
          <option v-for="village in cityVillages" :value="village.id">{{ village.name }}</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "getVillage",
  props: ["selectedCounty", "cities"],
  data() {
    return {
      cityVillages: "",
      selectedCity: "",
      selectedVillage: ""
    };
  },
  methods: {
    getVillages() {
      console.log("working");
      axios
        .post("/apps/city/villages", { city_id: this.selectedCity })
        .then(data => {
          console.log("data");
          this.cityVillages = data.data;
        })
        .catch(error => {
          console.log(error);
        });
    },

    updateVillageId(event) {
      this.$emit('update-village', this.selectedVillage);
    },
  },

};
</script>

