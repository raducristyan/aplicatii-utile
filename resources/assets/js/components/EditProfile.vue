<template></template> 
<script>
    export default {
        name: "EditProfile",
        props: [
            "editProfile",
            "url",
            "modalIsOpen",
            "closeModalClass"
        ],

        data() {
            return {
                profile: {},
                errors: {}
            };
        },

        watch: {
            editProfile: {
            immediate: true,
                handler: function(editProfile) {
                    this.profile = editProfile
                }
            }
        },

        methods: {
            updateProfile() {
                axios
                    .put(this.url, this.profile)
                    .then(response => {
                        window.location.href = "/dashboard";
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors;
                    });
            },
            closeModal(modal) {
                this.$emit("close-modal", modal);
            }

        }
    }; 
</script>