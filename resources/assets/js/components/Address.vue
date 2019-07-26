<template>
  <div
    class="modal fade"
    :id="modalId"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
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
                  <option
                    v-for="county in counties"
                    :value="county.id"
                    :selected="county.id == county"
                  >{{ county.name }}</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="col-sm-12">Localitatea (UAT)</label>
                <div>
                  <select class="form-control" name="city" v-model="city" @change="getVillages">
                    <option
                      v-for="city in countyCities"
                      :value="city.id"
                      :selected="city.id == city"
                    >{{ city.name }}</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="col-sm-12">Localitatea componentă</label>
                <div>
                  <select class="form-control" name="village" v-model="forms.address.village_id">
                    <option
                      v-for="village in cityVillages"
                      :value="village.id"
                      :selected="village.id == village"
                    >{{ village.name }}</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="col-md-12">Strada</label>
                <input
                  type="text"
                  name="street"
                  class="form-control"
                  v-model="forms.address.street"
                />
              </div>
              <div class="form-group col-md-6">
                <label class="col-md-12">Număr stradă</label>
                <input
                  type="text"
                  name="number"
                  class="form-control"
                  v-model="forms.address.number"
                />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="col-md-12">Bloc</label>
                <input type="text" name="bl" class="form-control" v-model="forms.address.bl" />
              </div>
              <div class="form-group col-md-6">
                <label class="col-md-12">Scară</label>
                <input type="text" name="sc" class="form-control" v-model="forms.address.sc" />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="col-md-12 col-md-6">Apartament</label>
                <input type="text" name="ap" class="form-control" v-model="forms.address.ap" />
              </div>
              <div class="form-group col-md-6">
                <label class="col-md-12 col-md-6">Cod poștal</label>
                <input
                  type="text"
                  name="postal_code"
                  class="form-control"
                  v-model="forms.address.postal_code"
                />
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" @click="updateAddress">Salvează</button>
          <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Address",
  props: [
    "counties",
    "county",
    "city",
    "village",
    "street",
    "number",
    "bl",
    "sc",
    "ap",
    "postal_code",
    "url",
    "owner",
    "modalId"
  ],

  data() {
    return {
      countyCities: "",
      cityVillages: "",

      forms: {
        address: {
          street: this.street,
          number: this.number,
          bl: this.bl,
          sc: this.sc,
          ap: this.ap,
          postal_code: this.postal_code,
          village_id: this.village,
          owner: this.owner
        },
        url: this.url
      }
    };
  },
  methods: {
    getVillageId(id) {
      this.forms.address.village_id = id;
    },
    updateAddress() {
      axios
        .put(this.forms.url, this.forms.address)
        .then(response => {
          window.location.href = "/dashboard";
        })
        .catch(error => {
          console.log(error);
        });
    },

    getCities() {
      axios
        .post("/apps/county/cities", { county_id: this.county })
        .then(data => {
          this.countyCities = data.data;
        })
        .catch(error => {});
    },

    getVillages() {
      axios
        .post("/apps/city/villages", { city_id: this.city })
        .then(data => {
          this.cityVillages = data.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },

  mounted() {
    if (this.county) {
      this.getCities();
    }
    if (this.city) {
      this.getVillages();
    }
  }
};
</script>
