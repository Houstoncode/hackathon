<template>
    <router-link to="/serialdetail/:key" class="serial-card serial-card__age">
        <div
            class="serial-card__top"
            :style="{ backgroundImage: `url(img/films/1/${item.id}.png)` }"
        >
            <div class="serial-card__bottom">
                <div class="serial-card__bottom-title">{{ item.name }}</div>
                <div class="serial-card__bottom-subtitle">
                    {{ item.subtitle }}
                </div>
            </div>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "LidersCard",
    props: {
        item: {
            required: true,
            default: {}
        }
    },
    data() {
        return {
            imgUrl: "img/serials/item-1.jpg"
        };
    }
};
</script>
