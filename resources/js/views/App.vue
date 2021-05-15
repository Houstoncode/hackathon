<template>
    <div class="main">
        <Header />

        <section class="film">
            <div class="container">
                <swiper :slides-per-view="1" :space-between="10">
                    <swiper-slide v-for="slide in 5" :key="slide"><FilmInfo /></swiper-slide>
                </swiper>
            </div>
        </section>

        <section class="leaders">
            <div class="container">
                <div class="leaders__title">Лидеры просмотров</div>
                <div class="leaders__wrapper">
                    <LidersCard />
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Header from "../components/Header";
import FilmInfo from "../components/FilmInfo";
import LidersCard from "../components/liders/LidersCard";

import { Swiper, SwiperSlide, directive } from "vue-awesome-swiper";
import "swiper/swiper-bundle.css";

export default {
    name: "home",
    components: {
        Swiper,
        SwiperSlide,
        Header,
        FilmInfo,
        LidersCard
    },
    directives: {
        swiper: directive
    }
};
</script>
