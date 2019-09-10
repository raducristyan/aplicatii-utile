<template></template>
<script>
export default {
  name: "newUser",
  props: [
    "url",
    "modalIsOpen"
  ],
  data() {
    return {
      newUser: {
        email: '',
        first_name: '',
        last_name: '',
        job: '',
        password: '',
        password_confirmation: ''
      },
      errors: {}
    };
  },
  methods: {
    addUser() {
      axios
        .put(this.url, this.newUser)
        .then(response => {
          this.formReset();
          window.location.href = "/dashboard";
        })
        .catch(error => {
          if (error.response.data.errors) {
            this.errors = error.response.data.errors;
          }
        });
    },

    closeModal(modal) {
      this.$emit("close-modal", modal);
    },

    formReset() {
      (this.userPassword.password = ""),
      (this.userPassword.password_confirmation = "");
    }
  }
};
</script>
