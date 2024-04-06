import Vue from "vue";
import TheCatalog from "./components/TheCatalog.vue"
// import CatalogOPenButton from "./components/CatalogOPenButton.vue"
import CatalogOPenButton from "./components/CatalogOpenButton.vue"

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