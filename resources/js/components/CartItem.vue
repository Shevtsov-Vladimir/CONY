<template>
    <div class="purchase">
        <a :href="route('show', { id: product.id })"
            ><img :src="product.photo" :alt="product.title" class="img-fluid"
        /></a>

        <div class="grid">
            <div class="fw-bold">{{ product.title }}</div>
            <div class="d-md-block d-none fw-bold text-end">Цена</div>
            <div class="d-md-block d-none fw-bold text-end">Количество</div>
            <div class="d-md-block d-none fw-bold text-end">Стоимость</div>
            <div class="fw-bold text-end">
                <a @click="$parent.deleteFromCart(product.id, index)">
                    <img src="/img/icons8-cross-mark-100 1.svg" alt="Удалить" />
                </a>
            </div>

            <div class="d-block d-md-none"></div>
            <div class="d-block d-md-none"></div>

            <div class="d-md-block d-none">{{ product.vendor_code }}</div>
            <div class="text-start text-md-end">
                {{ product.price + ".00 руб." }}
            </div>

            <div class="d-block d-md-none"></div>
            <div class="d-block d-md-none"></div>
            <div class="d-block d-md-none"></div>

            <div class="text-start text-md-end">
                <div class="product-control">
                    <button
                        @click="decreaseProductQuantity(product.id)"
                        class="product-operation"
                    >
                        -
                    </button>
                    <div class="product-quantity">
                        {{ cartQuantity }}
                    </div>
                    <button
                        @click="increaseProductQuantity(product.id)"
                        class="product-operation"
                    >
                        +
                    </button>
                </div>
            </div>
            <div class="d-md-block d-none text-end">
                {{ totalProductCost + ".00 руб." }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CartItem",

    props: ["product", "index"],

    data() {
        return {
            cartQuantity: 1,
            totalProductCost: 0,
        };
    },

    mounted() {
        this.getItemQuantityInCart();
        this.calculateTotalProductCost();
    },

    methods: {
        getItemQuantityInCart() {
            this.cartQuantity = +localStorage.getItem(this.product.id);
        },

        calculateTotalProductCost() {
            this.totalProductCost =
                this.product.price * +localStorage[this.product.id];
        },

        decreaseProductQuantity(id) {
            if (
                this.cartQuantity <= this.product.quantity &&
                this.cartQuantity > 1
            ) {
                localStorage.setItem(id, --this.cartQuantity);
                this.calculateTotalProductCost();
                this.$parent.calculateTotalCost();
            }
        },

        increaseProductQuantity(id) {
            if (this.cartQuantity < this.product.quantity) {
                localStorage.setItem(id, ++this.cartQuantity);
                this.calculateTotalProductCost();
                this.$parent.calculateTotalCost();
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
