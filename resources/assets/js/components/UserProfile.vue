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
      forms: {
        userProfile: {
          email: this.email,
          first_name: this.first_name,
          last_name: this.last_name,
          job: this.job,
          mobile: this.mobile,
          phone: this.phone,
          user_id: this.user_id
        }
      }
    };
  },
  methods: {
    updateProfile() {
      axios
        .put(this.url, this.forms.userProfile)
        .then(response => {
          window.location.href = "/dashboard";
          console.log(response);
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
