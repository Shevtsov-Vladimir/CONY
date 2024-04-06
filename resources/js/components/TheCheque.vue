<template>
    <div class="cheque">
        <div class="row">
            <h5 class="h5">Ваш заказ</h5>
            <a :href="route('cart')">Изменить</a>
        </div>
        <div class="row">
            <p>Товаров</p>
            <p>{{ goodsQuantity }}</p>
        </div>
        <div class="row">
            <p>Товаров</p>
            <p>{{ route().params.totalCost + ".00 руб." }}</p>
        </div>
        <div class="row">
            <p>Доставка</p>
            <p>0.00 руб.</p>
        </div>
        <div class="row">
            <p>Скидка</p>
            <p>0.00 руб.</p>
        </div>
        <hr class="text-center" />
        <p class="text-center">
            {{ "Итоговая сумма: " + route().params.totalCost + ".00 руб." }}
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            goodsQuantity: localStorage.length,
        };
    },
};
</script>
