<template>
    <div class="facts">
        <FilmInfo :item="getFirstFilm" />

        <div class="facts__block">
            <div class="container">
                <div class="facts__title">Все факты</div>
                <div class="facts__subtitle">
                    Коллекции фильмов и сериалов: кассовые
                </div>
                <div class="facts__wrapper">
                    <FactsCard v-for="card in 1" :key="card"  />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import FactsCard from "../components/FactsCard";
import { mapGetters } from "vuex";

export default {
    components: {
        FilmInfo,
        FactsCard
    },
    computed: {
        ...mapGetters(["getFirstFilm"])
    }
};
</script>
