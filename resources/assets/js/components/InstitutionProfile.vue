<template></template>
<script>
export default {
  name: "InstitutionProfile",
  props: [
    "email",
    "name",
    "bank",
    "iban",
    "phone",
    "fax",
    "cif",
    "institution_id",
    "url"
  ],
  data() {
    return {
      forms: {
        institutionProfile: {
          email: this.email,
          name: this.name,
          bank: this.bank,
          iban: this.iban,
          cif: this.cif,
          phone: this.phone,
          fax: this.fax,
          institution_id: this.institution_id
        }
      },
      oldData: {}
    };
  },

  computed: {
    canUpdate: function() {
      return window.util.compareObj(
        this.oldData,
        this.forms.institutionProfile
      );
    }
  },

  methods: {
    updateProfile() {
      axios
        .put(this.url, this.forms.institutionProfile)
        .then(response => {
          window.location.href = "/dashboard";
        })
        .catch(error => {
          console.log(error);
        });
    }
  },

  mounted() {
    this.oldData = Object.assign({}, this.forms.institutionProfile);
  }
};
</script>
