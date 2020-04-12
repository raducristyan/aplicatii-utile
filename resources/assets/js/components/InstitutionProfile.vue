<template></template> 
<script>
    export default {
        name: "InstitutionProfile",
        props: [
            "institution",
            "url",
            "modalIsOpen",
            "closeModalClass"
        ],
        data() {
            return {
                profile: this.institution,
                errors: {}
            };
        },

        watch: {
            institution: {
            immediate: true,
                handler: function(institution) {
                    this.profile = institution
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