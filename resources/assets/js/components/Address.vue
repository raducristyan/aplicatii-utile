<template></template>
<script>
import getVillage from "./getVillage";
export default {
  name: "Address",
  props: ["street", "number", "bl", "sc", "ap", "postal_code"],

  components: { getVillage },
  data() {
    return {
      county: "",
      countyCities: "",
      forms: {
        address: {
          street: this.street,
          number: this.number,
          bl: this.bl,
          sc: this.sc,
          ap: this.ap,
          postal_code: this.postal_code,
          village_id: "",
        }
      }
    };
  },
  methods: {

    getVillageId(id) {
      this.forms.address.village_id = id;
    },
    updateAddress() {
      axios
        .put("/apps/user/address", this.forms.address)
        .then(response => {
          window.location.href = "/dashboard";
          console.log(response);
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
    }
  }
};
</script>
