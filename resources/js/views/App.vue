<template>
    <div class="main">
        <Header />

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
                <div class="serials__title">Лучшие сериалы</div>
                <swiper class="serials__wrapper" :options="swiperOption3">
                    <swiper-slide v-for="card in 3" :key="card">
                        <SerialCard />
                    </swiper-slide>
                </swiper>
            </div>
        </section>

        <Footer />
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/swiper-bundle.css";

import Header from "../components/Header";
import Footer from "../components/Footer";
import FilmInfo from "../components/FilmInfo";
import LidersCard from "../components/liders/LidersCard";
import SerialCard from "../components/liders/SerialCard";

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
            }
        };
    },
    components: {
        Header,
        FilmInfo,
        LidersCard,
        SerialCard,
        Swiper,
        SwiperSlide,
        Footer
    }
};
</script>
