import Vue from "vue";
import ShowButtons from "./components/ShowButtons.vue";

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const show = new Vue({
    el: "#showButtons",

    components: {
        showButtons: ShowButtons,
    }
})