<template>
    <div>
        <section class="film">
            <div class="container">
                <swiper ref="slider1" class="swiper" :options="swiperOption">
                    <swiper-slide v-for="item in getFilms" :key="item.name"
                        ><FilmInfo :item="item" />
                    </swiper-slide>
                    <div
                        class="swiper-button-prev"
                        slot="button-prev"
                        @click="() => handlePrevSlide('slider1')"
                    >
                        <img src="img/arrow-left.png" alt="" />
                    </div>
                    <div
                        class="swiper-button-next"
                        slot="button-next"
                        @click="() => handleNextSlide('slider1')"
                    >
                        <img src="img/arrow-right.png" alt="" />
                    </div>
                </swiper>
            </div>
        </section>

        <section class="leaders">
            <div class="container">
                <div class="leaders__title">Лидеры просмотров</div>
                <swiper ref="slider2" :options="swiperOption2">
                    <swiper-slide
                        v-for="item in getPopularViews"
                        :key="`${item.name}`"
                    >
                        <LidersCard :item="item" />
                    </swiper-slide>
                    <div
                        class="swiper-button-prev"
                        slot="button-prev"
                        @click="() => handlePrevSlide('slider2')"
                    >
                        <img src="img/arrow-left.png" alt="" />
                    </div>
                    <div
                        class="swiper-button-next"
                        slot="button-next"
                        @click="() => handleNextSlide('slider2')"
                    >
                        <img src="img/arrow-right.png" alt="" />
                    </div>
                </swiper>
            </div>
        </section>

        <section class="serials">
            <div class="container">
                <div class="serials__title">Самые интересные подборки</div>
                <swiper
                    ref="slider3"
                    class="serials__wrapper"
                    :options="swiperOption3"
                >
                    <swiper-slide v-for="card in cards" :key="card.name">
                        <SerialCard :item="card" />
                    </swiper-slide>
                    <div
                        class="swiper-button-prev"
                        slot="button-prev"
                        @click="() => handlePrevSlide('slider3')"
                    >
                        <img src="img/arrow-left.png" alt="" />
                    </div>
                    <div
                        class="swiper-button-next"
                        slot="button-next"
                        @click="() => handleNextSlide('slider3')"
                    >
                        <img src="img/arrow-right.png" alt="" />
                    </div>
                </swiper>
            </div>
        </section>

        <section class="thematic">
            <div class="container">
                <div class="thematic__title">Тематические разделы</div>
                <swiper class="thematic__wrapper" :options="swiperOption4">
                    <swiper-slide v-for="theme in thematics" :key="theme.name">
                        <ThematicCard :item="theme" />
                    </swiper-slide>
                </swiper>
            </div>
        </section>
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import LidersCard from "../components/liders/LidersCard";
import SerialCard from "../components/liders/SerialCard";
import ThematicCard from "../components/liders/ThematicCard";

import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/swiper-bundle.css";
import { mapGetters } from "vuex";

export default {
    name: "home",
    data() {
        return {
            cards: [
                {
                    id: 1,
                    name: "Фильмы про роботов и киборгов",
                    subtitle: "Роботы"
                },
                {
                    id: 2,
                    name: "Любит не любит",
                    subtitle: "Российские ромкомы"
                },
                {
                    id: 3,
                    name: "Фильмы про акул",
                    subtitle: "Подводный ужас"
                }
            ],
            thematics: [
                {
                    id: 1,
                    name: "NHL. Все матчи"
                },
                {
                    id: 2,
                    name: "Академия"
                },
                {
                    id: 3,
                    name: "ТВ-шоу"
                },
                {
                    id: 4,
                    name: "Концерты"
                },
                {
                    id: 5,
                    name: "Путешествие"
                },
                {
                    id: 6,
                    name: "Караоке"
                }
            ],
            swiperOption: {
                slidesPerView: 1,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            },
            swiperOption2: {
                slidesPerView: 6,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            },
            swiperOption3: {
                slidesPerView: 3,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            },
            swiperOption4: {
                slidesPerView: 6,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            }
        };
    },
    computed: {
        ...mapGetters(["getPopularViews", "getFilms"])
    },
    methods: {
        handleNextSlide(ref) {
            this.$refs[ref].$swiper.slideNext();
        },
        handlePrevSlide(ref) {
            this.$refs[ref].$swiper.slidePrev();
        }
    },
    components: {
        FilmInfo,
        LidersCard,
        SerialCard,
        ThematicCard,
        Swiper,
        SwiperSlide
    }
};
</script>
