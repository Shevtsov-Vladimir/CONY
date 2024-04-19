<template>
    <div class="container" v-show="isActive">
        <slot></slot>
    </div>
</template>

<script>
export default {
    inject: ["addTab", "activeTabHash"],

    props: {
        title: {
            type: String,
            required: true,
        },
    },

    data() {
        return { hash: "", isActive: false };
    },

    created() {
        this.hash = `#${this.title.toLowerCase().replace(/ /g, "-")}`;

        this.addTab({
            title: this.title,
            hash: this.hash,
        });
    },
    watch: {
        activeTabHash() {
            this.isActive = this.activeTabHash === this.hash;
            
            if (this.isActive) {
                localStorage.setItem("activeTabHash", this.activeTabHash);
            }
        },
    },
};
</script>
