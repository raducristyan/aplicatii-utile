<template></template>
<script>
export default {
  name: "NewUser",
  props: [
    "url",
    "modalIsOpen",
    "closeModalClass"
  ],
  data() {
    return {
      newUser: {
        email: '',
        first_name: '',
        last_name: '',
        mobile: '',
        phone: '',
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
            formReset();
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
