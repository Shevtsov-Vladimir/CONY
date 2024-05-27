<template>
    <div class="d-flex show-buttons-block justify-content-between">
        <button @click="toggleItemInCart(productId)" class="btn btn-yellow">
            {{ productStatus }}
        </button>
        <a
            :href="route('cart')"
            @click="buyNow(productId)"
            class="btn btn-outline-dark"
            >Купить сейчас</a
        >
    </div>
</template>

<script>
export default {
    props: ["productId"],

    data() {
        return {
            productStatus: "В корзину",
        };
    },

    mounted() {
        if (localStorage[this.productId] > 0) {
            this.icon = "/img/addedToCart.svg";
            this.productStatus = "В корзине";
        }
    },

    methods: {
        toggleItemInCart(id) {
            if (localStorage[id] > 0 && !isNaN(localStorage[id])) {
                localStorage.removeItem(id);
                this.productStatus = "В корзину";
            } else {
                localStorage[id] = 1;
                this.productStatus = "В корзине";
            }
        },

        buyNow(id) {
            if (not(localStorage[id] > 0 && !isNaN(localStorage[id]))) {
                localStorage[id] = 1;
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
