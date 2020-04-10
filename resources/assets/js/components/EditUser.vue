<template></template>
<script>
export default {
  name: "EditUser",
  props: [
    "modalIsOpen",
    "closeModalClass",
    "editedUser"
  ],
  data() {
    return {
      editedUser: {},
      errors: {},
      url: 'admin/institution/users/edit/',
    };
  },
  methods: {
    updateUser() {

      axios
        .put(this.url, this.user.id)
        .then(response => {
          console.log(response);
          //window.location.href = "/dashboard";
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

    openModal(modal) {
      this.$emit("open-modal", modal);
    },

    confirmDeletion() {
      this.user = this.editedUser;
      this.updateUser();
    }

  }
};
</script>
