/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__app_vue__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__app_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__app_vue__);



var vm = new Vue({
    el: '#app',
    components: {
        app: __WEBPACK_IMPORTED_MODULE_0__app_vue___default.a
    },

    //render: h => h('app'),

    mounted: function mounted() {
        // if (this.selected.county) {
        //     this.getCities();
        // }
        console.log('functioneaza');
    }
});

/***/ }),
/* 9 */,
/* 10 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//

/* harmony default export */ __webpack_exports__["default"] = ({
    name: 'App',
    mounted: function mounted() {
        console.log('component');
    },
    data: function data() {
        return {
            selected: {
                county: "",
                city: ""
            },
            cities: [],
            showCities: false,
            hideCities: false,
            formAddPerson: {
                isValid: false,
                isEmpty: true,
                isCompleted: false
            },
            formAddCompany: {
                isValid: false,
                isEmpty: true,
                isCompleted: false
            },
            person: {
                cnp: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                name: {
                    val: "",
                    isValid: "",
                    hasError: "",
                    pattern: /^[a-z]+[a-z\s'\-]*[a-z]+$/i
                },
                email: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                street: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                number: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                phone: {
                    val: ""
                },
                bl: {
                    val: ""
                },
                sc: {
                    val: ""
                },
                ap: {
                    val: ""
                },
                postalCode: {
                    val: "",
                    isValid: true,
                    hasError: false
                }
            },
            company: {
                name: {
                    val: "",
                    isValid: "",
                    hasError: "",
                    pattern: /^[a-z0-9]+[a-z0-9\s'\-]*[a-z0-9]+$/i
                },
                cif: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                j: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                authorized: {
                    cnp: {
                        val: "",
                        isValid: "",
                        hasError: ""
                    },
                    name: {
                        val: "",
                        isValid: "",
                        hasError: "",
                        pattern: /^[a-z]+[a-z\s'\-]*[a-z]+$/i
                    }
                },
                email: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                iban: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                bank: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                street: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                number: {
                    val: "",
                    isValid: "",
                    hasError: ""
                },
                phone: {
                    val: ""
                },
                bl: {
                    val: ""
                },
                sc: {
                    val: ""
                },
                ap: {
                    val: ""
                },
                postalCode: {
                    val: "",
                    isValid: true,
                    hasError: false
                }
            },
            county: {
                isValid: "",
                hasError: ""
            },
            city: {
                isValid: "",
                hasError: ""
            },
            mark: {
                val: "",
                isValid: ""
            },
            type: {
                person: true,
                company: false
            }
        };
    },

    //end data section

    //start methods
    methods: {
        //start getCities
        getCities: function getCities() {
            var _this = this;

            this.showCities = false;
            this.selected.city = "";
            this.showHideCities();
            axios.post('/api/county/cities', { 'county_id': this.selected.county }).then(function (data) {
                console.log(data);
                _this.cities = data.data;
                if (_this.selected.county) {
                    _this.showCities = true;
                }
                _this.showHideCities();
                if (_this.type.person) {
                    _this.validateFormAddPerson();
                } else {
                    _this.validateFormAddCompany();
                }
            }).catch(function (error) {
                console.log(error);
            });
        },

        //end getCities

        //start showHideCities
        showHideCities: function showHideCities() {
            if (this.showCities === false && this.selected.county.length > 0) {
                this.hideCities = true;
            } else {
                this.hideCities = false;
            }
        },

        //end showHideCities

        //start validateCNP
        validateCNP: function validateCNP(cnp) {

            if (cnp.val.length) {
                if (cnp.val.length !== 13) {
                    cnp.isValid = false;
                    cnp.hasError = "Cnp-ul trebuie să conțină 13 numere!";
                } else {
                    var cnp_v = cnp.val.split("");
                    var suma = cnp_v[0] * 2 + cnp_v[1] * 7 + cnp_v[2] * 9 + cnp_v[3] * 1 + cnp_v[4] * 4 + cnp_v[5] * 6 + cnp_v[6] * 3 + cnp_v[7] * 5 + cnp_v[8] * 8 + cnp_v[9] * 2 + cnp_v[10] * 7 + cnp_v[11] * 9;
                    if (suma % 11 < 11) {

                        if (suma % 11 < 10 && suma % 11 == cnp_v[12]) {
                            cnp.isValid = true;
                            cnp.hasError = false;
                        } else if (suma % 11 == 10 && cnp_v[12] == 1) {
                            cnp.isValid = true;
                            cnp.hasError = false;
                        } else {
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
        validateName: function validateName(type) {
            var name_expr = "";
            var temp_name = "";
            var pers = "";

            if (type === 'person') {
                name_expr = this.person.name.pattern;
                temp_name = this.person.name;
                pers = "persoanei";
            } else if (type === 'company') {
                name_expr = this.company.name.pattern;
                temp_name = this.company.name;
                pers = "firmei";
            } else if (type === 'auth_name') {
                name_expr = this.company.authorized.name.pattern;
                temp_name = this.company.authorized.name;
                pers = "reprezentantului";
            }

            if (temp_name.val.length > 0) {

                if (temp_name.val.length < 6 && !name_expr.test(temp_name.val)) {

                    temp_name.isValid = false;
                    if (type === "person") {
                        temp_name.hasError = "Numele " + pers + " trebuie să conțină minim 6 caractere. Sunt permise numai litere!";
                    } else {
                        temp_name.hasError = "Numele " + pers + " trebuie să conțină minim 6 caractere. Sunt permise numai caractere alfanumerice!";
                    }
                } else if (temp_name.val.length < 6) {

                    temp_name.isValid = false;
                    temp_name.hasError = "Numele " + pers + " trebuie să conțină minim 6 caractere!";
                } else if (name_expr.test(temp_name.val) === false) {

                    temp_name.isValid = false;
                    if (type === "person") {
                        temp_name.hasError = "Numele " + pers + " trebuie să conțină numai litere. Eliminați spațiile goale de la începutul sau sfârșitul câmpului!";
                    } else {
                        temp_name.hasError = "Numele " + pers + " trebuie să conțină numai caractere alfanumerice. Eliminați spațiile goale de la începutul sau sfârșitul câmpului!";
                    }
                } else if (temp_name.val.length >= 6 && name_expr.test(temp_name.val)) {
                    temp_name.isValid = true;
                    temp_name.hasError = false;
                }
            } else {
                temp_name.isValid = false;
                temp_name.hasError = "Nu ați completat numele " + pers + "!";
            }
        },

        //end validateName

        //start validateEmail
        validateEmail: function validateEmail(email) {
            var email_expr = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
            if (email.val.length) {
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
        validateCounty: function validateCounty() {
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
        validateCity: function validateCity() {
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
        validateStreet: function validateStreet(street) {

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
        validateNumber: function validateNumber(number) {
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
        validateCif: function validateCif(cif) {
            var $cif = cif.val.trim();
            if ($cif.length === 0) {
                cif.hasError = "Nu ați completat codul de identificare fiscală!";
                cif.isValid = false;
            } else if (typeof $cif !== 'number' && $cif % 1 !== 0) {
                cif.hasError = "Codul de identificare fiscală conține doar cifre!";
                cif.isValid = false;
            } else if ($cif.length > 10 || $cif.length < 6) {
                cif.hasError = "Codul de identificare fiscală conține între 6 și 10 cifre!";
                cif.isValid = false;
            } else {
                // numarul de control
                var v = 753217532;

                // extrage cifra de control
                var c1 = cif.val % 10;
                $cif = parseInt($cif / 10);

                // executa operatiile pe cifre
                var t = 0;
                while ($cif > 0) {
                    t += $cif % 10 * (v % 10);
                    $cif = parseInt($cif / 10);
                    v = parseInt(v / 10);
                }

                // aplica inmultirea cu 10 si afla modulo 11
                var c2 = t * 10 % 11;

                // daca modulo 11 este 10, atunci cifra de control este 0
                if (c2 == 10) {
                    c2 = 0;
                }
                if (c1 !== c2) {
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
        validatePostalCode: function validatePostalCode(postalCode) {
            if (postalCode.val.length > 0) {
                var reg_exp = /^[0-9]*$/;

                if (!reg_exp.test(postalCode.val)) {
                    postalCode.isValid = false;
                    postalCode.hasError = "Codul poștal conține numai cifre!";
                }

                if (postalCode.val.length !== 6) {
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
        formAddPersonIsValid: function formAddPersonIsValid() {
            if (!this.person.cnp.isValid || !this.person.name.isValid || !this.county.isValid || !this.city.isValid || !this.person.street.isValid || !this.person.number.isValid || !this.person.email.isValid || !this.person.postalCode.isValid) {
                this.formAddPerson.isValid = false;
            } else {
                this.formAddPerson.isValid = true;
            }
        },

        //end formAddPersonIsValid

        //start formAddCompanyIsValid
        formAddCompanyIsValid: function formAddCompanyIsValid() {
            if (!this.company.name.isValid && !this.company.cif.isValid && !this.company.authorized.cnp.isValid || !this.company.authorized.name.isValid || !this.county.isValid || !this.city.isValid || !this.company.street.isValid || !this.company.number.isValid || !this.company.email.isValid || !this.company.postalCode.isValid) {
                this.formAddCompany.isValid = false;
            } else {
                this.formAddCompany.isValid = true;
            }
        },

        //end formAddCompanyIsValid

        //start formAddPersonIsEmpty
        formAddPersonIsEmpty: function formAddPersonIsEmpty() {
            if (!this.person.cnp.val && !this.person.name.val && !this.selected.county && !this.selected.city && !this.person.street.val && !this.person.number.val && !this.person.email.val && !this.person.phone.val && !this.person.street.val && !this.person.number.val && !this.person.bl.val && !this.person.sc.val && !this.person.ap.val && !this.person.postalCode.val) {
                this.formAddPerson.isEmpty = true;
            } else {
                this.formAddPerson.isEmpty = false;
            }
        },

        //end formAddPersonIsEmpty

        //start formAddCompanyIsEmpty
        formAddCompanyIsEmpty: function formAddCompanyIsEmpty() {
            if (!this.company.name.val && !this.company.cif.val && !this.company.j.val && !this.company.authorized.cnp.val && !this.company.authorized.name.val && !this.company.iban.val && !this.company.bank.val && !this.selected.county && !this.selected.city && !this.company.street.val && !this.company.number.val && !this.company.email.val && !this.company.phone.val && !this.company.street.val && !this.company.number.val && !this.company.bl.val && !this.company.sc.val && !this.company.ap.val && !this.company.postalCode.val) {
                this.formAddCompany.isEmpty = true;
            } else {
                this.formAddCompany.isEmpty = false;
            }
        },

        //end formAddCompanyIsEmpty

        //start validateFormAddPerson
        validateFormAddPerson: function validateFormAddPerson() {
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

            if (!this.formAddPerson.isEmpty && this.formAddPerson.isValid) {
                this.formAddPerson.isCompleted = true;
            } else {
                this.formAddPerson.isCompleted = false;
            }
        },

        //end validateFormAddPerson

        //start validateFormAddCompany
        validateFormAddCompany: function validateFormAddCompany() {
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

            if (!this.formAddCompany.isEmpty && this.formAddCompany.isValid) {
                this.formAddCompany.isCompleted = true;
            } else {
                this.formAddCompany.isCompleted = false;
            }
        },

        //end validateFormAddCompany

        //start validateMarkForm
        validateMarkForm: function validateMarkForm() {
            if (this.mark.val.length > 0) {
                this.mark.isValid = true;
            }
        },

        //end validateMarkForm

        //start setTypePerson
        setTypePerson: function setTypePerson() {
            this.type.person = true;
            this.type.company = false;
        },

        //end setTypePerson

        //start setTypeCompany
        setTypeCompany: function setTypeCompany() {
            this.type.person = false;
            this.type.company = true;
        }
    }
});

/***/ }),
/* 30 */,
/* 31 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(32)();
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", ""]);

/***/ }),
/* 32 */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function() {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		var result = [];
		for(var i = 0; i < this.length; i++) {
			var item = this[i];
			if(item[2]) {
				result.push("@media " + item[2] + "{" + item[1] + "}");
			} else {
				result.push(item[1]);
			}
		}
		return result.join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};


/***/ }),
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(39)

var Component = __webpack_require__(37)(
  /* script */
  __webpack_require__(29),
  /* template */
  __webpack_require__(38),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "C:\\Users\\raduc\\Code\\aplicatii-utile\\resources\\assets\\js\\app.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] app.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-ca95d620", Component.options)
  } else {
    hotAPI.reload("data-v-ca95d620", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 37 */
/***/ (function(module, exports) {

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = Object.create(options.computed || null)
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
    options.computed = computed
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c("div")
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-ca95d620", module.exports)
  }
}

/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(31);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(40)("0d063adc", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../node_modules/css-loader/index.js!../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-ca95d620\",\"scoped\":false,\"hasInlineConfig\":true}!../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./app.vue", function() {
     var newContent = require("!!../../../node_modules/css-loader/index.js!../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"id\":\"data-v-ca95d620\",\"scoped\":false,\"hasInlineConfig\":true}!../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./app.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),
/* 40 */
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__(41)

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction) {
  isProduction = _isProduction

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[data-vue-ssr-id~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ }),
/* 41 */
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ }),
/* 42 */,
/* 43 */,
/* 44 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(8);
module.exports = __webpack_require__(10);


/***/ })
/******/ ]);