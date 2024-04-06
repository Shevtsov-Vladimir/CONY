<template>
    <div>

    </div>
</template>

<script>
export default {
    name: "CatalogOpenButton",

    methods: {
        onClickButton(event) {
            this.getProducts()
            this.$emit("clicked", true)
        },

        getProducts() {
            axios.get("/api/products/all").then((body) => {
                this.products = body.data;
            });
        },
    },
};
</script>

<style scoped></style>
