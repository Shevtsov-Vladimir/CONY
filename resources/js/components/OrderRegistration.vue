<template>
    <div class="row justify-content-between">
        <div class="col-12 col-md-5">
            <form ref="form" :action="route('order.store', {orderProductIdAndQuantity: productIdsQuantityList, totalCost: route().params.totalCost})" method="POST">
                <slot></slot>
                <!-- <csrf-token-input /> -->
                <h3 class="h3">Оформление заказа</h3>
                <!-- 
                    {{-- <input class="form-control" placeholder="Введите фамилию" type="text" name="surname"> --}}
                    {{-- <input class="form-control" placeholder="Введите имя" type="text" name="firstname"> --}}
                    {{-- <input class="form-control" placeholder="Введите отчество" type="text" name="patronymic"> --}}
                    {{-- <input class="form-control" placeholder="Введите телефон" type="tel" name="telephone"> --}} -->
                <input
                    v-model="delivery_address"
                    class="form-control"
                    placeholder="Введите адрес доставки"
                    type="text"
                    name="delivery_address"
                />

                <!-- <input type="hidden" name="totalCost" value="route().params.totalCost"> -->
                <!-- <input type="hidden" name="orderProductIdAndQuantity" value="productIdsQuantityList"> -->

                <label for="comment" class="form-label"
                    >Комментарий к заказу</label
                >
                <textarea
                    v-model="orderComemnt"
                    class="form-control"
                    id="comment"
                    rows="5"
                    name="orderComment"
                ></textarea>

                <button
                    @click="submitForm"
                    class="btn btn-yellow"
                >
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
// import func from 'vue-editor-bridge';
import TheCheque from "./TheCheque.vue";
export default {
    props: ['userId'],

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
            // console.log(keys)
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

    mounted() {
        // this.makeProductIdsList()
    },

    methods: {
        submitForm() {
            localStorage.clear();
            this.$refs.form.$el.submit()
        },

        addOrder() {
            console.log(
                this.delivery_address,
                this.orderComemnt,
                this.productIdsQuantityList,
                this.userId,
                route().params.totalCost
            );

            axios
                .post("/api/order/store", {
                    delivery_address: this.delivery_address,
                    orderComemnt: this.orderComemnt,
                    userId: this.userId,
                    totalCost: route().params.totalCost,
                    orderProductIdAndQuantity: this.productIdsQuantityList,
                })
                .then((res) => {
                    console.log(res);
                });
        },

        makeProductIdsList() {
            for (let key in localStorage) {
                // this.productIdsList[+key] = +localStorage[key]
                // console.log(this.productIdsQuantityList);
                console.log(typeof +localStorage[key]);
            }
        },
    },
};
</script>
