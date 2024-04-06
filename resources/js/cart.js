import Vue from "vue";
import Cart from "./components/Cart.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const cart = new Vue({
    el: "#cart",

    components: {
        Cart,
    }
})