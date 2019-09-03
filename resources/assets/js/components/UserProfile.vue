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
            "url",
            "modalIsOpen"
        ],

        data() {
            return {
                profile: {
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