
import Vue from 'vue';
import Axios from 'axios';

Vue.component('address-view', require('./components/Address.vue'));
Vue.component('user-profile-view', require('./components/UserProfile.vue'));

const vm = new Vue({
    el: '#app',
    data: {
        county: '',
        countyCities: ''        
    },
    methods: {
        logout: function () {
            Axios.post('logout',{})
            .then(function (response) {
                window.location.reload(true);
            })
        },
        getCities () {
            axios.post('/api/county/cities', {'county_id': this.county})
                    .then((data) => {
                    this.countyCities = data.data;
                }).catch((error) => {
            })
        }
    }
});
