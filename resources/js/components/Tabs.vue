<template>
    <div class="tabs">
        <ul class="tabs-menu">
            <li
                class="tabs-menu-item"
                :class="{
                    activeTab: tab.hash === activeTabHash,
                }"
                v-for="tab in tabs"
                :key="tab.title"
                @click="activeTabHash = tab.hash"
            >
                {{ tab.title }}
            </li>
        </ul>
        <slot />
    </div>
</template>

<script>
import { computed } from "vue";

export default {
    data() {
        return {
            activeTabHash: "",
            tabs: [],
        };
    },

    provide() {
        return {
            addTab: (tab) => {
                const count = this.tabs.push(tab);

                if (tab.hash === localStorage.activeTabHash) {
                    this.activeTabHash = localStorage.activeTabHash;
                } else if (count === 2 && !localStorage.activeTabHash) {
                    this.activeTabHash = tab.hash;
                }
            },
            activeTabHash: computed(() => this.activeTabHash),
        };
    },
};
</script>
