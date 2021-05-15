<template>
    <div class="facts">
        <FilmInfo />

        <div class="facts__block">
            <div class="container">
                <div class="facts__title">Все факты</div>
                <div class="facts__subtitle">
                    Коллекции фильмов и сериалов: кассовые
                </div>
                <div class="facts__wrapper">
                    <FactsCardDetail v-for="card in 9" :key="card" />
                </div>
            </div>
        </div>

        <button class="facts__btn">Ответить</button>
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import FactsCardDetail from "../components/FactsCardDetail";

export default {
    components: {
        FilmInfo,
        FactsCardDetail
    }
};
</script>
