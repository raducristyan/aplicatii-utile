<template></template>
<script>
    export default {
        name: 'App',
        mounted() {console.log('component')},
        data() {
            return {
                selected: {
                    county: "",
                    city: "",
                },
                cities: [],
                showCities: false,
                hideCities: false,
                formAddPerson: {
                    isValid: false,
                    isEmpty: true,
                    isCompleted: false,
                },
                formAddCompany: {
                    isValid: false,
                    isEmpty: true,
                    isCompleted: false,
                },
                person:{
                    cnp: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    name: {
                        val: "",
                        isValid: "",
                        hasError: "",
                        pattern: /^[a-z]+[a-z\s'\-]*[a-z]+$/i,
                    },
                    email: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    street: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    number: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    phone: {
                        val: "",
                    },
                    bl: {
                        val: "",
                    },
                    sc: {
                        val: "",
                    },
                    ap: {
                        val: "",
                    },
                    postalCode: {
                        val: "",
                        isValid: true,
                        hasError: false,
                    },
                },
                company: {
                    name: {
                        val: "",
                        isValid: "",
                        hasError: "",
                        pattern: /^[a-z0-9]+[a-z0-9\s'\-]*[a-z0-9]+$/i,
                    },
                    cif: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    j: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    authorized: {
                        cnp: {
                            val: "",
                            isValid: "",
                            hasError: "",
                        },
                        name: {
                            val: "",
                            isValid: "",
                            hasError: "",
                            pattern: /^[a-z]+[a-z\s'\-]*[a-z]+$/i,
                        },
                    },
                    email: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    iban: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    bank: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    street: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    number: {
                        val: "",
                        isValid: "",
                        hasError: "",
                    },
                    phone: {
                        val: "",
                    },
                    bl: {
                        val: "",
                    },
                    sc: {
                        val: "",
                    },
                    ap: {
                        val: "",
                    },
                    postalCode: {
                        val: "",
                        isValid: true,
                        hasError: false,
                    },
                },
                county: {
                    isValid: "",
                    hasError: "",
                },
                city: {
                    isValid: "",
                    hasError: "",
                },
                mark: {
                    val: "",
                    isValid: "",
                },
                type: {
                    person: true,
                    company: false,
                },
            }
        },
        //end data section

        //start methods
        methods: {
            //start getCities
            getCities() {
                this.showCities = false;
                this.selected.city = "";
                this.showHideCities();
                axios.post('/api/county/cities', {'county_id': this.selected.county})
                     .then((data) => {
                        console.log(data);
                        this.cities = data.data;
                        if (this.selected.county) {
                            this.showCities = true;
                        }
                        this.showHideCities();
                        if (this.type.person) {
                            this.validateFormAddPerson();
                        } else {
                            this.validateFormAddCompany();

                        }
                    })
                     .catch((error) => {
                    console.log(error);
                });
            },
            //end getCities

            //start showHideCities
            showHideCities() {
                if ((this.showCities === false) && (this.selected.county.length > 0)) {
                    this.hideCities = true;
                } else {
                    this.hideCities = false;
                }
            },
            //end showHideCities

            //start validateCNP
            validateCNP(cnp) {

                if ( cnp.val.length ) {
                    if (cnp.val.length !== 13) {
                        cnp.isValid = false;
                        cnp.hasError = "Cnp-ul trebuie să conțină 13 cifre!";
                    } else {
                        var cnp_v = cnp.val.split("");
                        var suma = cnp_v[0]*2+cnp_v[1]*7+cnp_v[2]*9+cnp_v[3]*1+cnp_v[4]*4+cnp_v[5]*6+cnp_v[6]*3+cnp_v[7]*5+cnp_v[8]*8+cnp_v[9]*2+cnp_v[10]*7+cnp_v[11]*9;
                        if (suma % 11 < 11) {

                            if (suma % 11 < 10 && suma%11 == cnp_v[12]){
                                cnp.isValid = true;
                                cnp.hasError = false;
                            }else if (suma % 11 == 10 && cnp_v[12] == 1){
                                cnp.isValid = true;
                                cnp.hasError = false;
                            }else {
                                cnp.isValid = false;
                                cnp.hasError = "Cnp-ul nu este valid!";
                            }
                        }
                    }
                } else {
                    cnp.isValid = false;
                    cnp.hasError = "Nu ați completat CNP-ul!";
                }
            },
            //end validateCNP

            //start validateName
            validateName(type) {
                var pattern = "";
                var temp_name = "";
                var person = "";

                if (type === 'person') {
                    pattern = this.person.name.pattern;
                    temp_name = this.person.name;
                    person = "persoanei";
                } else if (type === 'company'){
                    pattern = this.company.name.pattern;
                    temp_name = this.company.name;
                    person = "firmei";
                } else if (type === 'auth_name') {
                    pattern = this.company.authorized.name.pattern;
                    temp_name = this.company.authorized.name;
                    person = "reprezentantului";
                }

                if ( temp_name.val.length > 0 ) {

                    if ( (temp_name.val.length < 6) && (!pattern.test(temp_name.val)) ) {

                        temp_name.isValid = false;
                        if (type === "person") {
                            temp_name.hasError = "Numele "+ person +" trebuie să conțină minim 6 caractere. Sunt permise numai litere!";

                        } else {
                            temp_name.hasError = "Numele "+ person +" trebuie să conțină minim 6 caractere. Sunt permise numai caractere alfanumerice!";
                        }

                    } else if (temp_name.val.length < 6) {

                        temp_name.isValid = false;
                        temp_name.hasError = "Numele "+ person +" trebuie să conțină minim 6 caractere!";

                    } else if ( pattern.test(temp_name.val) === false) {

                        temp_name.isValid = false;
                        if (type === "person") {
                            temp_name.hasError = "Numele "+ person +" trebuie să conțină numai litere. Eliminați spațiile goale de la începutul sau sfârșitul câmpului!";
                        } else {
                            temp_name.hasError = "Numele "+ person +" trebuie să conțină numai caractere alfanumerice. Eliminați spațiile goale de la începutul sau sfârșitul câmpului!";
                        }

                    } else if ( (temp_name.val.length >= 6) && (pattern.test(temp_name.val)) ) {
                        temp_name.isValid = true;
                        temp_name.hasError = false;
                    }

                } else {
                    temp_name.isValid = false;
                    temp_name.hasError = "Nu ați completat numele "+ person +"!";
                }
            },
            //end validateName

            //start validateEmail
            validateEmail(email) {
                var email_expr = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
                if ( email.val.length ) {
                    if (!email_expr.test(email.val)) {
                        email.isValid = false;
                        email.hasError = "Adresa de email nu este validă!";
                    } else {
                        email.isValid = true;
                        email.hasError = false;
                    }
                } else {
                    email.isValid = true;
                    email.hasError = false;
                }
            },
            //end validateEmail

            //start validateCounty
            validateCounty() {
                if (!this.selected.county) {
                    this.county.isValid = false;
                    this.county.hasError = "Nu ați selectat județul!";
                } else {
                    this.county.isValid = true;
                    this.county.hasError = false;
                }
            },
            //end validateCounty

            //start validateCity
            validateCity() {
                if (this.selected.county && !this.selected.city) {
                    this.city.isValid = false;
                    this.city.hasError = "Nu ați selectat localitatea!";
                } else {
                    this.city.isValid = true;
                    this.city.hasError = false;
                }
            },
            //end validateCity

            //start validateStreet
            validateStreet(street) {

                if (!street.val) {
                    street.isValid = false;
                    street.hasError = "Nu ați completat strada!";
                } else {
                    street.isValid = true;
                    street.hasError = false;
                }
            },
            //end validateStreet

            //start validateNumber
            validateNumber(number) {
                if (!number.val) {
                    number.isValid = false;
                    number.hasError = "Nu ați completat numărul străzii!";
                } else {
                    number.isValid = true;
                    number.hasError = false;
                }
            },
            //end validateNumber

            //start validateCif
            validateCif(cif) {
                var $cif = cif.val.trim();
                if ( $cif.length === 0 ) {
                    cif.hasError = "Nu ați completat codul de identificare fiscală!";
                    cif.isValid = false;
                }else if ( typeof $cif !== 'number' && ( $cif % 1 ) !== 0 ) {
                    cif.hasError = "Codul de identificare fiscală conține doar cifre!";
                    cif.isValid = false;
                } else if ( $cif.length > 10 || $cif.length < 6 ){
                    cif.hasError = "Codul de identificare fiscală conține între 6 și 10 cifre!";
                    cif.isValid = false;
                } else {
                    // numarul de control
                    var v = 753217532;

                    // extrage cifra de control
                    var c1 = cif.val % 10;
                    $cif = parseInt( $cif / 10 );

                    // executa operatiile pe cifre
                    var t = 0;
                    while ( $cif > 0 ){
                        t += ( $cif % 10 ) * ( v % 10 );
                        $cif = parseInt( $cif / 10 );
                        v = parseInt( v / 10 );
                    }

                    // aplica inmultirea cu 10 si afla modulo 11
                    var c2 = t * 10 % 11;

                    // daca modulo 11 este 10, atunci cifra de control este 0
                    if(c2 == 10){
                            c2 = 0;
                    }
                    if( c1 !== c2 ) {
                        cif.hasError = "Codul de identificare fiscală nu este corect!";
                        cif.isValid = false;
                    } else {
                        cif.hasError = false;
                        cif.isValid = true;
                    }
                }
            },
            //end validateCif

            //start validatePostalCode
            validatePostalCode(postalCode) {
                if ( postalCode.val.length > 0 ) {
                    var reg_exp = /^[0-9]*$/;

                    if (!reg_exp.test(postalCode.val)) {
                        postalCode.isValid = false;
                        postalCode.hasError = "Codul poștal conține numai cifre!";
                    }

                    if ( postalCode.val.length !== 6 ) {
                        postalCode.isValid = false;
                        postalCode.hasError = "Codul poștal trebuie să conțină 6 cifre!";
                    } else {
                        postalCode.isValid = true;
                        postalCode.hasError = false;
                    }
                } else if (postalCode.val.length === 0) {
                    postalCode.isValid = true;
                    postalCode.hasError = false;
                }
            },
            //end validatePostalCode

            //start formAddPersonIsValid
            formAddPersonIsValid() {
                if ( !this.person.cnp.isValid || !this.person.name.isValid || !this.county.isValid || !this.city.isValid || !this.person.street.isValid || !this.person.number.isValid || !this.person.email.isValid || !this.person.postalCode.isValid ) {
                    this.formAddPerson.isValid = false;
                }else {
                    this.formAddPerson.isValid = true;
                }
            },
            //end formAddPersonIsValid

            //start formAddCompanyIsValid
            formAddCompanyIsValid() {
                if ( !this.company.name.isValid && !this.company.cif.isValid && !this.company.authorized.cnp.isValid || !this.company.authorized.name.isValid || !this.county.isValid || !this.city.isValid || !this.company.street.isValid || !this.company.number.isValid || !this.company.email.isValid || !this.company.postalCode.isValid ) {
                    this.formAddCompany.isValid = false;
                }else {
                    this.formAddCompany.isValid = true;
                }
            },
            //end formAddCompanyIsValid

            //start formAddPersonIsEmpty
            formAddPersonIsEmpty() {
                if ( !this.person.cnp.val && !this.person.name.val && !this.selected.county && !this.selected.city && !this.person.street.val && !this.person.number.val && !this.person.email.val && !this.person.phone.val && !this.person.street.val && !this.person.number.val && !this.person.bl.val && !this.person.sc.val && !this.person.ap.val && !this.person.postalCode.val ) {
                    this.formAddPerson.isEmpty = true;
                }else {
                    this.formAddPerson.isEmpty = false;
                }
            },
            //end formAddPersonIsEmpty

            //start formAddCompanyIsEmpty
            formAddCompanyIsEmpty() {
                if ( !this.company.name.val && !this.company.cif.val && !this.company.j.val && !this.company.authorized.cnp.val && !this.company.authorized.name.val && !this.company.iban.val && !this.company.bank.val && !this.selected.county && !this.selected.city && !this.company.street.val && !this.company.number.val && !this.company.email.val && !this.company.phone.val && !this.company.street.val && !this.company.number.val && !this.company.bl.val && !this.company.sc.val && !this.company.ap.val && !this.company.postalCode.val ) {
                    this.formAddCompany.isEmpty = true;
                }else {
                    this.formAddCompany.isEmpty = false;
                }
            },
            //end formAddCompanyIsEmpty

            //start validateFormAddPerson
            validateFormAddPerson() {
                if (this.type.person) {
                    var cnp = this.person.cnp;
                    var email = this.person.email;
                    var street = this.person.street;
                    var nr = this.person.number;
                    var postalCode = this.person.postalCode;

                    this.validateName('person');
                    this.validateCNP(cnp);
                    this.validateEmail(email);
                    this.validateCounty();
                    this.validateCity();
                    this.validateStreet(street);
                    this.validateNumber(nr);
                    this.validatePostalCode(postalCode);
                    this.formAddPersonIsEmpty();
                    this.formAddPersonIsValid();
                }

                if ( !this.formAddPerson.isEmpty && this.formAddPerson.isValid ) {
                    this.formAddPerson.isCompleted = true;
                }else {
                    this.formAddPerson.isCompleted = false;
                }
            },
            //end validateFormAddPerson

            //start validateFormAddCompany
            validateFormAddCompany() {
                if (this.type.company) {

                    var cnp = this.company.authorized.cnp;
                    var email = this.company.email;
                    var street = this.company.street;
                    var nr = this.company.number;
                    var cif = this.company.cif;
                    var postalCode = this.company.postalCode;

                    this.validateName('company');
                    this.validateName('auth_name');
                    this.validateCNP(cnp);
                    this.validateEmail(email);
                    this.validateCounty();
                    this.validateCity();
                    this.validateStreet(street);
                    this.validateNumber(nr);
                    this.validateCif(cif);
                    this.validatePostalCode(postalCode);
                    this.formAddCompanyIsEmpty();
                    this.formAddCompanyIsValid();
                }

                if ( !this.formAddCompany.isEmpty && this.formAddCompany.isValid ) {
                    this.formAddCompany.isCompleted = true;
                }else {
                    this.formAddCompany.isCompleted = false;
                }
            },
            //end validateFormAddCompany

            //start validateMarkForm
            validateMarkForm() {
                if (this.mark.val.length > 0) {
                    this.mark.isValid = true;
                }
            },
            //end validateMarkForm

            //start setTypePerson
            setTypePerson() {
                this.type.person = true;
                this.type.company = false;
            },
            //end setTypePerson

            //start setTypeCompany
            setTypeCompany() {
                this.type.person = false;
                this.type.company = true;
            },
            //end setTypeCompany
        },
        //end methods
    }
</script>

<style></style>
