import Vue from "vue";
import OrderRegistration from "./components/OrderRegistration.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const orderRegistration = new Vue({
    el: "#orderRegistration",

    components: {
        OrderRegistration,
    }
})