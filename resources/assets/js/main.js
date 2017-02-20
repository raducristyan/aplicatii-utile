
import app from './app.vue';

const vm = new Vue({
    el: '#app',
    components: {
        app,
    },

    //render: h => h('app'),

    mounted() {
        // if (this.selected.county) {
        //     this.getCities();
        // }
        console.log('functioneaza');
    },
});
