<template>
    <div class="facts-result" :class="{ 'facts-result__loss': isFailed }">
        <button class="auth__close" @click="$emit('handleHiddenFactsResilt')">
            <img src="img/close-icon.png" alt="" />
        </button>
        <div class="facts-result__wrapper">
            <div class="facts-result__wrapper-points">
                <div class="facts-result__points-current">
                    {{ countAnswers }}
                </div>
                <div>из</div>
                <div class="facts-result__wrapper-length">{{ allCounts }}</div>
            </div>
            <div class="facts-result__wrapper-title">
                {{
                    isFailed
                        ? "Похоже вы забыли некоторые факты."
                        : "Поздравляем с прохождением теста по сериалу."
                }}
            </div>
            <div class="facts-result__wrapper-subtitle">
                {{
                    isFailed
                        ? "Предлагаю освежить память и пересмотреть эти моменты."
                        : "Вы очень хорошо знаете все факты об этом сериале. Смотрите новые сериалы у нас."
                }}
            </div>
            <a
                href="https://wink.rt.ru/media_items/65864566"
                class="facts-result__wrapper-btn"
                target="_blank"
                >{{ isFailed ? "Посмотреть" : "Узнать подробнее..." }}</a
            >
            <div v-if="!isFailed" class="facts-result__wrapper-img">
                <img src="img/logo.png" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        countAnswers: {
            type: Number
        },
        allCounts: {
            type: Number
        }
    },
    computed: {
        isFailed() {
            return this.allCounts > this.countAnswers;
        }
    }
};
</script>
