
import Vue from 'vue';
import Axios from 'axios';
import App from './App.vue';
import Address from './components/Address.vue';

const vm = new Vue({
    el: '#app',
    data: {

    },
    components: {
        App,
        Address
    },
    methods: {
        logout: function () {
            Axios.post('logout',{})
            .then(function (response) {
                window.location.href = '/';
            })
        }
    }
});
