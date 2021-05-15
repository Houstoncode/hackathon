<template>
    <div
        class="film-info"
        v-bind:style="{ backgroundImage: `url(${item.path_full})` }"
    >
        <div class="container">
            <div class="film-info__limitations">
                <div class="film-info__limitations-disp">
                    {{ item.category }}
                </div>
                <!-- <div class="film-info__limitations-term">Драма</div> -->
                <div class="film-info__limitations-age">{{ item.age }}+</div>
            </div>
            <div class="film-info__wrapper">
                <div class="film-info__wrapper-left">
                    <div class="film-info__wrapper-title">
                        {{ item.name }}
                    </div>
                    <div class="film-info__wrapper-subtext">
                        {{ item.subdescription }}
                    </div>
                </div>
                <div class="film-info__wrapper-right"></div>
                <div class="film-info__wrapper-info">
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            {{ item.wink.toFixed(1) }}
                        </div>
                        <div class="film-info__wrapper-info_text">Wink</div>
                    </div>
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            {{ item.kinopoisk.toFixed(1) }}
                        </div>
                        <div class="film-info__wrapper-info_text">
                            КиноПоиск
                        </div>
                    </div>
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            {{ item.imdb.toFixed(1) }}
                        </div>
                        <div class="film-info__wrapper-info_text">IMDb</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            imgUrl: "img/main-bg/item-1.jpg"
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
