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
                    <FactsCardDetail
                        v-for="(question, index) in getFirstFilm.tasks"
                        v-model="answers[index + 1]"
                        :item="question"
                        :index="index"
                        :counts="getFirstFilm.tasks.length"
                        :key="index"
                    />
                </div>
            </div>
        </div>

        <button class="facts__btn">Ответить</button>

        <FactsResult v-if="false" />
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import FactsCardDetail from "../components/FactsCardDetail";
import { mapGetters } from "vuex";
import FactsResult from "../components/FactsResult";

export default {
    data() {
        return {
            answers: {}
        };
    },
    components: {
        FilmInfo,
        FactsCardDetail,
        FactsResult
    },
    computed: {
        ...mapGetters(["getFirstFilm"])
    }
};
</script>
