<template>
    <router-link to="/thematic/:key" class="thematic-card thematic-card__age">
        <div
            class="thematic-card__top"
            :style="{ backgroundImage: `url(&quot;${imgUrl}&quot;)` }"
        >
            <div class="thematic-card__bottom">Любит не любит</div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "thematicCard",
    data() {
        return {
            imgUrl: "img/thematic/item-1.jpg"
        };
    }
};
</script>
