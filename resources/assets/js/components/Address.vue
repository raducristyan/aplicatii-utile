<template>
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
    "modalId",
    "modalIsOpen"
  ],

  data() {
    return {
      selectedCounty: "",
      selectedCity: "",
      selectedVillage: "",
      countyCities: "",
      cityVillages: "",

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
      oldData: {},
      errors: {}
    };
  },

  computed: {
    canUpdate: function() {
      return window.util.compareObj(this.oldData, this.address);
    }
  },

  methods: {
    getVillageId(id) {
      this.address.village_id = id;
    },
    updateAddress() {
      axios
        .put(this.url, this.address)
        .then(response => {
          window.location.href = "/dashboard";
        })
        .catch(error => {
          console.log(error);
        });
    },

    getCities() {
      axios
        .post("/apps/county/cities", { county_id: this.selectedCounty })
        .then(data => {
          this.countyCities = data.data;
        })
        .catch(error => {});
    },

    getVillages() {
      axios
        .post("/apps/city/villages", { city_id: this.selectedCity })
        .then(data => {
          this.cityVillages = data.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    closeModal(modal) {
      this.$emit("close-modal", modal);
    }
  },

  mounted() {
    this.selectedCounty = this.county;

    if (this.selectedCounty) {
      this.getCities();
    }

    this.selectedCity = this.city;

    if (this.selectedCity) {
      this.getVillages();
    }

    this.address.village_id = this.village;

    this.oldData = Object.assign({}, this.address);
  }
};
</script>
