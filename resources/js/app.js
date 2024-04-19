import Vue from "vue";
import TheCatalog from "./components/TheCatalog.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const catalog = new Vue({
    el: "#catalog",

    components: {
        catalog: TheCatalog,
    }
})

import AddToCartIcon from "./components/AddToCartIcon.vue"

const cart = new Vue({
    el: "#card",

    components: {
        AddToCartIcon,
    }
})