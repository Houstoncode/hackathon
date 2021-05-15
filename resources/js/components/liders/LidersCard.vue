<template>
    <router-link
        to="/factsdetail"
        class="leaders-card"
        :class="{ 'leaders-card__preview': item.is_premier }"
    >
        <div
            class="leaders-card__top"
            :style="{ backgroundImage: `url(${item.image_href})` }"
        ></div>
        <div class="leaders-card__bottom">
            {{ item.name }}
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
    },
    props: {
        item: {
            required: true,
            default: {}
        }
    }
};
</script>
