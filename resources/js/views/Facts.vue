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
                    <FactsInfo v-for="card in 9" :key="card" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FilmInfo from "../components/FilmInfo";
import FactsInfo from "../components/FactsCard";

export default {
    components: {
        FilmInfo,
        FactsInfo
    }
};
</script>
