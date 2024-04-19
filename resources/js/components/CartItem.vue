<template>
    <div>
        <div class="purchase">
            <img :src="product.photo" :alt="product.title" class="img-fluid" />
            <table>
                <thead>
                    <tr>
                        <th>{{ product.title }}</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Стоимость</th>
                        <th>
                            <a
                                @click="
                                    $parent.deleteFromCart(product.id, index)
                                "
                            >
                                <img
                                    src="/img/icons8-cross-mark-100 1.svg"
                                    alt="Удалить"
                                />
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>{{ product.price + ".00 руб." }}</td>
                        <td>
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
                        </td>
                        <td>{{ totalProductCost + ".00 руб." }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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
