<template>
    <router-link to="/thematic/:key" class="thematic-card thematic-card__age">
        <div
            class="thematic-card__top"
            :style="{ backgroundImage: `url(img/films/2/${item.id}.png)` }"
        >
            <div class="thematic-card__bottom">{{ item.name }}</div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "thematicCard",
    props: {
        item: {
            required: true
        }
    },
    data() {
        return {
            imgUrl: "img/thematic/item-1.jpg"
        };
    }
};
</script>
