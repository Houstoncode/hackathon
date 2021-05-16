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
                        v-model="answers[index]"
                        :item="question"
                        :index="index"
                        :counts="getFirstFilm.tasks.length"
                        :key="index"
                    />
                </div>
            </div>
        </div>

        <button
            class="facts__btn"
            :class="{ disabled: isDisabled }"
            @click="handleShowFactsResult"
        >
            Ответить
        </button>

        <transition name="fade">
            <FactsResult
                v-if="modelResult"
                :all-counts="getFirstFilm.tasks.length"
                :count-answers="countAnswers"
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
            answers: [
                [false, false, false],
                [false, false, false],
                [false, false, false],
                [false, false, false],
                [false, false, false]
            ],
            countAnswers: 0
        };
    },
    mounted() {
        setTimeout(() => {
            this.getFirstFilm.tasks.forEach((task, index) => {
                this.answers[index] = [];

                task.answers.forEach((answer, idx) => {
                    this.answers[index][idx] = false;
                });
            });
        }, 1000);
    },
    computed: {
        ...mapGetters(["getFirstFilm"]),
        isDisabled() {
            let disabled = true;

            const arr = this.answers
                .map(answer => {
                    return answer.includes(true) || null;
                })
                .filter(item => item);

            if (arr && arr.length === this.getFirstFilm.tasks.length) {
                disabled = false;
            } else disabled = true;

            return disabled;
        }
    },
    methods: {
        async handleShowFactsResult() {
            const response = await fetch(window.origin + "/api/verify", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ answers: this.answers })
            });

            const {
                data: { countAnswers }
            } = await response.json();

            this.countAnswers = countAnswers;
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

<style scoped>
.disabled {
    opacity: 0.3;
    user-select: none;
    pointer-events: none;
}
</style>
