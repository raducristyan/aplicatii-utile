<template></template>
<script>
export default {
  name: "UserPassword",
  props: [
    "user_email",
    "modalIsOpen"
  ],
  data() {
    return {
      userPassword: {
        user_email: this.user_email,
        old_password: '',
        new_password: '',
        new_password_confirmation: ''
      },
      errors: {}
    };
  },
  methods: {
    updatePassword() {
      axios
        .post("/user/password/change", this.userPassword)
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
      (this.userPassword.old_password = ""),
        (this.userPassword.new_password = ""),
        (this.userPassword.new_password_confirmation = "");
    }
  }
};
</script>
