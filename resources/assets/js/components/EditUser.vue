<template></template>
<script>
export default {
  name: "EditUser",
  props: [
    "userToEdit",
    "modalIsOpen",
    "closeModalClass",
  ],

  data() {
    return {
      editedUser: {},
      errors: {},
      url: 'admin/institution/users/edit/',
    }
  },

  watch: {
    userToEdit: {
      immediate: true,
      handler: function(user) {
        this.editedUser = user
      }
    }
  },

  methods: {
    updateUser() {

      axios
        .put(this.url, this.editedUser)
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

  }
};
</script>
