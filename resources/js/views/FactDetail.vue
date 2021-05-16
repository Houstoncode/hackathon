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

        <button class="facts__btn" @click="handleShowFactsResult">
            Ответить
        </button>

        <transition name="fade">
            <FactsResult
                v-if="modelResult"
                @handleHiddenFactsResilt="handleHiddenFactsResilt"
            />
        </transition>
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import FactsCardDetail from "../components/FactsCardDetail";
import { mapGetters } from "vuex";
import FactsResult from "../components/FactsResult";

export default {
    components: {
        FilmInfo,
        FactsCardDetail,
        FactsResult
    },
    data() {
        return {
            modelResult: false,
            answers: {}
        };
    },
    computed: {
        ...mapGetters(["getFirstFilm"])
    },
    methods: {
        handleShowFactsResult() {
            this.modelResult = true;
            document.querySelector("body").style.overflow = "hidden";
        },
        handleHiddenFactsResilt() {
            this.modelResult = false;
            document.querySelector("body").style.overflow = "auto";
        }
    }
};
</script>
