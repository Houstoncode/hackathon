<template>
    <div>
        <section class="film">
            <div class="container">
                <swiper class="swiper" :options="swiperOption">
                    <swiper-slide v-for="slide in 5" :key="slide"
                        ><FilmInfo />
                    </swiper-slide>
                    <div class="swiper-button-prev" slot="button-prev">
                        <img src="img/arrow-left.png" alt="" />
                    </div>
                    <div class="swiper-button-next" slot="button-next">
                        <img src="img/arrow-right.png" alt="" />
                    </div>
                </swiper>
            </div>
        </section>

        <section class="leaders">
            <div class="container">
                <div class="leaders__title">Лидеры просмотров</div>
                <swiper :options="swiperOption2">
                    <swiper-slide v-for="slide in 6" :key="slide">
                        <LidersCard />
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="serials">
            <div class="container">
                <div class="serials__title">Самые интересные подборки</div>
                <swiper class="serials__wrapper" :options="swiperOption2">
                    <swiper-slide v-for="card in 3" :key="card">
                        <SerialCard />
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="thematic">
            <div class="container">
                <div class="thematic__title">Тематические разделы</div>
                <swiper class="thematic__wrapper" :options="swiperOption3">
                    <swiper-slide v-for="card in 6" :key="card">
                        <ThematicCard />
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="pather">
            <div class="container">
                <div class="pather__wrapper">
                    <div class="pather__wrapper-item">
                        <img src="img/pather/item-1.png" alt="" />
                    </div>
                    <div class="pather__wrapper-item">
                        <img src="img/pather/item-2.png" alt="" />
                    </div>
                    <div class="pather__wrapper-item">
                        <img src="img/pather/item-3.png" alt="" />
                    </div>
                    <div class="pather__wrapper-item">
                        <img src="img/pather/item-4.png" alt="" />
                    </div>
                    <div class="pather__wrapper-item">
                        <img src="img/pather/item-5.png" alt="" />
                    </div>
                </div>
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

export default {
    name: "home",
    data() {
        return {
            swiperOption: {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            },
            swiperOption2: {
                slidesPerView: 3,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            },
            swiperOption3: {
                slidesPerView: 6,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            }
        };
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
