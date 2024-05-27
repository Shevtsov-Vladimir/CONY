<template>
    <div class="row justify-content-between">
        <div class="col-12 col-md-5">
            <form
                ref="form"
                :action="
                    route('order.store', {
                        orderProductIdAndQuantity: productIdsQuantityList,
                        delivery_address: delivery_address,
                        orderComemnt: orderComemnt,
                    })
                "
                method="POST"
            >
                <slot></slot>
                <h3 class="h3">Оформление заказа</h3>
                <input
                    v-model="delivery_address"
                    class="form-control"
                    placeholder="Введите адрес доставки"
                    type="text"
                    name="delivery_address"
                    required
                />

                <label for="comment" class="form-label"
                    >Комментарий к заказу</label
                >
                <textarea
                    v-model="orderComemnt"
                    class="form-control"
                    id="comment"
                    rows="5"
                    name="orderComment"
                    required
                ></textarea>

                <button @click="submitForm" class="btn btn-yellow">
                    Оформить заказ
                </button>
            </form>
        </div>

        <div id="cheque" class="col-12 col-md-4">
            <TheCheque />
        </div>
    </div>
</template>

<script>
import TheCheque from "./TheCheque.vue";
export default {
    props: ["userId"],

    data() {
        return {
            delivery_address: "",
            orderComemnt: "",
        };
    },

    computed: {
        productIdsQuantityList: function () {
            const a = {};

            const keys = Object.keys(localStorage);
            for (let key of keys) {
                let item = localStorage.getItem(key);
                item = parseInt(item);
                a[key] = item;
            }

            return a;
        },
    },

    components: {
        TheCheque,
    },

    methods: {
        submitForm() {
            localStorage.clear();
            this.$refs.form.$el.submit();
        },

        addOrder() {
            axios.post("/api/order/store", {
                delivery_address: this.delivery_address,
                orderComemnt: this.orderComemnt,
                userId: this.userId,
                totalCost: route().params.totalCost,
                orderProductIdAndQuantity: this.productIdsQuantityList,
            });
        },
    },
};
</script>
