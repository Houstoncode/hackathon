<template>
    <router-link to="#" class="facts-card">
        <div
            class="facts-card__bg"
            :style="{ backgroundImage: `url(${imgUrl})` }"
        >
            <div class="facts-card__info">
                <div class="facts-card__info-title">Любит не любит</div>
                <div class="facts-card__info-text">Российские ромкомы</div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "FactsCard",
    data() {
        return {
            imgUrl: "img/facts/item-1.jpg"
        };
    }
};
</script>
