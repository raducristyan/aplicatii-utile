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
        <select class="form-control" name="village" v-model="selectedVillage">
          <option v-for="village in cityVillages" :value="village.id">{{ village.name }}</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
// import Axios from "axios";

export default {
  name: "Address",
  props: ["selectedCounty", "cities"],
  data() {
    return {
      selectedCity: "",
      selectedVillage: "",
      cityVillages: ""
    };
  },
  methods: {
    getVillages() {
      console.log("working");
      axios
        .post("/api/city/villages", { city_id: this.selectedCity })
        .then(data => {
          console.log("data");
          this.cityVillages = data.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

