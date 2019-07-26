<template></template>

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
    updateVillageId(event) {
      this.$emit("update-village", this.selectedVillage);
    }
  }
};
</script>
