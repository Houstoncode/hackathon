<template>
    <div class="film-info" v-bind:style='{ backgroundImage: `url("${imgUrl}")` }'>
        <div class="container">
            <div class="film-info__limitations">
                <div class="film-info__limitations-disp">Детям</div>
                <div class="film-info__limitations-term">Новинка</div>
                <div class="film-info__limitations-age">6+</div>
            </div>
            <div class="film-info__wrapper">
                <div class="film-info__wrapper-left">
                    <div class="film-info__wrapper-title">
                        Супергеройские фильмы Marvel
                    </div>
                    <div class="film-info__wrapper-subtext">
                        Захватывающее анимационное фэнтези от Marvel
                    </div>
                </div>
                <div class="film-info__wrapper-right"></div>
                <div class="film-info__wrapper-info">
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            8.5
                        </div>
                        <div class="film-info__wrapper-info_text">Wink</div>
                    </div>
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            7.6
                        </div>
                        <div class="film-info__wrapper-info_text">
                            КиноПоиск
                        </div>
                    </div>
                    <div class="film-info__wrapper-info_item">
                        <div class="film-info__wrapper-info_estimation">
                            7.4
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
            imgUrl: 'public/img/main-bg/item-1.jpg'
        }
    }
}
</script>