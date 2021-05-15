<template>
    <router-link
        to="/filmdetail/:key"
        class="leaders-card leaders-card__preview"
    >
        <div
            class="leaders-card__top"
            :style="{ backgroundImage: `url(&quot;${imgUrl}&quot;)` }"
        ></div>
        <div class="leaders-card__bottom">
            Райя и последний дракон
        </div>
    </router-link>
</template>

<script>
export default {
    name: "LidersCard",
    data() {
        return {
            imgUrl: "img/evidence/item-1.jpg"
        };
    }
};
</script>
