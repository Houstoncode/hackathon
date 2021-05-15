<template>
    <router-link to="factsdetail" class="facts-card">
        <div
            class="facts-card__bg"
            :style="{ backgroundImage: `url(${imgUrl})` }"
        >
            <div class="facts-card__info">
                <div class="facts-card__info-title">Хаус и всё всё всё</div>
                <div class="facts-card__info-text">Российские ромкомы</div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "FactsCard",
    props: {},
    data() {
        return {
            imgUrl: "img/facts/1.png"
        };
    }
};
</script>
