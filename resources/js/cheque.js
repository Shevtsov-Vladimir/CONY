import Vue from "vue";
import Cheque from "./components/TheCheque.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const cheque = new Vue({
    el: "#cheque",

    components: {
        Cheque,
    }
})