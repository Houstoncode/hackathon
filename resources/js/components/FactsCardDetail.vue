<template>
    <div class="facts-card-detail">
        <div
            class="facts-card-detail__top"
            :style="{
                backgroundImage: `url(img/questions/wf_${index + 1}.png)`
            }"
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
                            :name="`${index}`"
                            @input="
                                event =>
                                    handleInput(
                                        event.target.value,
                                        indexQuestion
                                    )
                            "
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
    methods: {
        handleInput(value, idx) {
            if (value === "on") value = true;
            else value = false;

            const obj = [];

            this.item.answers.forEach((element, index) => {
                obj[index] = index === idx ? value : false;
            });

            this.$emit("input", obj);
        }
    },
    computed: {
        ...mapGetters(["getFirstFilm"])
    }
};
</script>
