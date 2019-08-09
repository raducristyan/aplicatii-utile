<template></template>
<script>
export default {
  name: "UserProfile",
  props: [
    "email",
    "first_name",
    "last_name",
    "job",
    "mobile",
    "phone",
    "user_id",
    "url"
  ],

  data() {
    return {
      address: {
        email: this.email,
        first_name: this.first_name,
        last_name: this.last_name,
        job: this.job,
        mobile: this.mobile,
        phone: this.phone,
        user_id: this.user_id
      },
      errors: {}
    };
  },

  computed: {},

  methods: {
    updateProfile() {
      axios
        .put(this.url, this.address)
        .then(response => {
          window.location.href = "/dashboard";
        })
        .catch(error => {
          this.errors = error.response.data.errors;
        });
    }
  },

  mounted() {}
};
</script>
