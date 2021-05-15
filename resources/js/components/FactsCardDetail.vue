<template>
    <div class="facts-card-detail">
        <div
            class="facts-card-detail__top"
            :style="{ backgroundImage: `url(${imgUrl})` }"
        >
            <div class="facts-card-detail__count">
                <div class="facts-card-detail__title">Факт</div>
                <div class="facts-card-detail__index">
                    <div>{{ index + 1 }}</div>
                    <div>/</div>
                    <div>{{ counts }}</div>
                </div>
            </div>
            <div class="facts-card-detail__text">
                {{ item.description }}
            </div>
        </div>
        <div class="facts-card-detail__bottom">
            <div class="facts-card-detail__bottom-text">
                Выберите правильный ответ:
            </div>
            <div class="facts-card-detail__bottom-block">
                <div class="facts-card-detail__bottom-block_item">
                    <div
                        class="form_radio"
                        v-for="(question, indexQuestion) in item.answers"
                        :key="`${index}.${indexQuestion}`"
                    >
                        <input
                            :id="`${index}.${indexQuestion}`"
                            type="radio"
                            :name="`${index}.${indexQuestion}`"
                        />
                        <label :for="`${index}.${indexQuestion}`">{{
                            question.text
                        }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
    name: "FactsDetail",
    props: {
        item: {
            required: true
        },
        index: {
            required: true
        },
        counts: {
            required: true
        }
    },
    data() {
        return {
            imgUrl: "img/factsdetail/item-1.jpg"
        };
    },
    computed: {
        ...mapGetters(["getFirstFilm"])
    }
};
</script>
