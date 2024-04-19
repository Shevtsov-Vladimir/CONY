<template>
    <a @click="toggleItemInCart(productId)">
        <img
            :src="icon"
            alt="Добавить товар в корзину"
            class="img-fluid"
            loading="lazy"
        />
    </a>
</template>

<script>
export default {
    name: "AddToCartIcon",

    props: ["productId"],

    data() {
        return {
            icon: null,
        };
    },

    mounted() {
        if (localStorage[this.productId] > 0) {
            this.icon = "/img/addedToCart.svg";
        } else {
            this.icon = "/img/addToCart.jpg";
        }
    },

    methods: {
        toggleItemInCart(id) {
            if (localStorage[id] > 0 && !isNaN(localStorage[id])) {
                localStorage.removeItem(id);
                this.icon = "/img/addToCart.jpg";
            } else {
                localStorage[id] = 1;
                this.icon = "/img/addedToCart.svg";
            }
        },
    },
};
</script>

<style scoped>
a:hover {
    cursor: pointer;
}
</style>
