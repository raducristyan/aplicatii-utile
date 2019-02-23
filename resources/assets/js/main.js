
import Vue from 'vue';
import Axios from 'axios';

Vue.component('city-view', require('./components/Address.vue'));

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
                window.location.href = '/';
            })
        },
        getCities () {
            axios.post('/api/county/cities', {'county_id': this.county})
                    .then((data) => {
                    console.log(data);
                    this.countyCities = data.data;
                }).catch((error) => {
                console.log(error)
            })
        }
    }
});
