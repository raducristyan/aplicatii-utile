
import Vue from 'vue';
import App from './App.vue';
import Axios from 'axios';

const vm = new Vue({
    el: '#app',
    data: {

    },
    components: {
        App
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
