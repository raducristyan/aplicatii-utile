import Vue from 'vue';
import Axios from 'axios';
window.util = require('./util');

Vue.component('address-view', require('./components/Address.vue'));
Vue.component('user-profile-view', require('./components/UserProfile.vue'));
Vue.component('user-password-view', require('./components/UserPassword.vue'));
Vue.component('institution-profile-view', require('./components/InstitutionProfile.vue'));

const vm = new Vue({
    el: '#app',
    data: {

    },

    methods: {
        logout: function() {
            Axios.post('logout', {})
                .then(function(response) {
                    window.location.reload(true);
                })
        },
    }
});