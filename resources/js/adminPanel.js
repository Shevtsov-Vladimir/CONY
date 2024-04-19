import Vue from "vue";
import Tab from "./components/Tab.vue"
import Tabs from "./components/Tabs.vue"

require('./bootstrap');

Vue.mixin({
    methods: {
        route: route
    }
});

const adminPanel = new Vue({
    el: "#adminPanel",

    components: {
        Tab,
        Tabs,
    }
})