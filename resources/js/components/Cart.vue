<template>
    <div class="row">
        <div
            v-for="(product, index) in products"
            :key="product.id"
            class="col-12"
        >
            <CartItem :product="product" :index="index" />
        </div>

        <div class="container text-end">
            <p class="cost">Итоговая сумма: {{ totalCost + ".00 руб." }}</p>
            <a
                :href="
                    route('order_registration', { totalCost: this.totalCost })
                "
                class="btn btn-yellow"
                >К оформлению</a
            >
        </div>
    </div>
</template>

<script>
import CartItem from "./CartItem.vue";
export default {
    data() {
        return {
            cartItemsIds: [],
            products: [],
            index: 0,
            totalCost: 0,
        };
    },

    components: {
        CartItem,
    },

    mounted() {
        this.checkLocalStorage();
        this.getProducts();
    },

    methods: {
        checkLocalStorage() {
            for (let el in localStorage) {
                if (localStorage[el] > 0) {
                    this.cartItemsIds.push(el);
                }
            }
        },

        getProducts() {
            axios
                .get("/api/idSpecifiedArray", {
                    params: { cartItemsIds: this.cartItemsIds },
                })
                .then((body) => {
                    this.products = body.data;
                    this.calculateTotalCost();
                    console.log(body.data);
                });
        },

        calculateTotalCost() {
            this.totalCost = 0;

            for (let product of this.products) {
                this.totalCost += product.price * +localStorage[product.id];
            }
        },

        deleteFromCart(id, index) {
            localStorage.removeItem(id);
            this.products.splice(index, 1);

            if (this.totalCost > 0) {
                this.totalCost = 0;
                this.calculateTotalCost();
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
