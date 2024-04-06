import Vue from "vue";
import AddToCartIcon from "./components/AddToCartIcon.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const cart = new Vue({
    el: "#card",

    components: {
        AddToCartIcon,
    }
})