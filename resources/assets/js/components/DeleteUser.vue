<template></template>
<script>
export default {
  name: "DeleteUser",
  props: [
    "modalIsOpen",
    "closeModalClass",
    "deletedUser"
  ],
  data() {
    return {
      user: {},
      errors: {},
      url: 'admin/institution/users/delete/',
    };
  },
  methods: {
    deleteUser() {

      axios
        .delete(this.url + this.user.id)
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
      this.user = this.deletedUser;
      this.deleteUser();
    }

  }
};
</script>
