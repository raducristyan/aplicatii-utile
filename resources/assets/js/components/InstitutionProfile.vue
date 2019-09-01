<template></template> 
<script>
    export default {
        name: "InstitutionProfile",
        props: [
            "email",
            "name",
            "bank",
            "iban",
            "phone",
            "fax",
            "cif",
            "institution_id",
            "url",
            "modalIsOpen"

        ],
        data() {
            return {
                profile: {
                    email: this.email,
                    name: this.name,
                    bank: this.bank,
                    iban: this.iban,
                    cif: this.cif,
                    phone: this.phone,
                    fax: this.fax,
                    institution_id: this.institution_id
                },
                errors: {}
            };
        },

        computed: {},

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