<template>
    <router-link to="/serialdetail/:key" class="serial-card serial-card__age">
        <div
            class="serial-card__top"
            :style="{ backgroundImage: `url(${imgUrl})` }"
        >
            <div class="serial-card__bottom">
                <div class="serial-card__bottom-title">Любит не любит</div>
                <div class="serial-card__bottom-subtitle">
                    Российские ромкомы
                </div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "LidersCard",
    data() {
        return {
            imgUrl: "img/serials/item-1.jpg"
        };
    }
};
</script>
