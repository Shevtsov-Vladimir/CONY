<template>
    <div>
        <div class="category-block mx-auto d-flex justify-content-between">
            <a
                @click="getFilteredProducts('all')"
                :class="isActive == 'all' ? 'active' : ''"
                class="category order-0"
                >Все</a
            >
            <a
                @click="getFilteredProducts('Серьги')"
                :class="isActive == 'Серьги' ? 'active' : ''"
                class="category order-1"
                >Серьги</a
            >
            <a
                @click="getFilteredProducts('Колье')"
                class="category order-2"
                :class="isActive == 'Колье' ? 'active' : ''"
                >Колье</a
            >
            <a
                @click="getFilteredProducts('Браслеты')"
                class="category order-4 order-md-3"
                :class="isActive == 'Браслеты' ? 'active' : ''"
                >Браслеты</a
            >
            <a
                @click="getFilteredProducts('Кольца')"
                class="category order-5 order-md-4"
                :class="isActive == 'Кольца' ? 'active' : ''"
                >Кольца</a
            >
            <a
                @click="getFilteredProducts('Подвески')"
                class="category order-3 order-md-5"
                :class="isActive == 'Подвески' ? 'active' : ''"
                >Подвески</a
            >
        </div>
        <div class="after-block mx-auto">
            <a
                @click="getFilteredProducts('Браслеты')"
                class="category order-4 order-md-3"
                :class="isActive == 'Браслеты' ? 'active' : ''"
                >Браслеты</a
            >
            <a
                @click="getFilteredProducts('Кольца')"
                :class="isActive == 'Кольца' ? 'active' : ''"
                class="category order-5 order-md-4"
                >Кольца</a
            >
        </div>
        <div class="row gy-card">
            <div
                v-for="product in products"
                :key="product.id"
                class="col col-md-6 col-xl-4 d-flex justify-content-center"
            >
                <div class="card" style="width: 339px">
                    <img
                        :src="product.photo"
                        class="card-img-top"
                        :alt="product.title"
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ product.title }}</h5>
                        <p class="card-text">
                            {{ product.description.slice(0, 58) + ".." }}
                        </p>
                        <p class="card-price">{{ product.price }}&nbsp;руб.</p>
                        <div
                            class="d-flex align-items-center justify-content-between"
                        >
                            <a
                                :href="route('show', product)"
                                class="btn btn-outline-dark"
                                >Подробнее</a
                            >
                            <AddToCartIcon :product-id="product.id" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button
                        v-if="!isAllShown"
                        @click="onClickButton('all')"
                        class="btn btn-yellow"
                    >
                        Смотреть все
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Filtering from "./Filtering.vue";
import CatalogOpenButton from "./CatalogOpenButton.vue";
import AddToCartIcon from "./AddToCartIcon.vue";
export default {
    data() {
        return {
            isAllShown: false,
            isActive: "all",
            products: null,
        };
    },

    mounted() {
        this.getProducts(3);
    },

    components: {
        AddToCartIcon,
        Filtering,
        CatalogOpenButton,
    },

    methods: {
        getProducts(amount) {
            axios.get("/api/products/" + amount).then((body) => {
                this.products = body.data;
            });
        },

        getFilteredProducts(filter) {
            axios.get("/api/filteredProducts/" + filter).then((body) => {
                this.products = body.data;
                this.isAllShown = true;
                this.isActive = filter;
            });
        },

        onClickButton(amount) {
            this.getProducts(amount);
            this.isAllShown = true;
        },
    },
};
</script>

<style scoped>
a:hover {
    cursor: pointer;
}
</style>
