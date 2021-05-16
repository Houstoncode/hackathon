<template>
    <div class="facts-result facts-result__loss">
        <button class="auth__close" @click="$emit('handleHiddenFactsResilt')">
            <img src="img/close-icon.png" alt="" />
        </button>
        <div class="facts-result__wrapper">
            <div class="facts-result__wrapper-points">
                <div class="facts-result__points-current">5</div>
                <div>из</div>
                <div class="facts-result__wrapper-length">5</div>
            </div>
            <div class="facts-result__wrapper-title">
                Поздравляем с прохождением теста по сериалу.
            </div>
            <div class="facts-result__wrapper-subtitle">
                Вы очень хорошо знаете все факты об этом сериале. Смотри новые
                сериалы у нас.
            </div>
            <router-link to="#" class="facts-result__wrapper-btn"
                >Узнать подробнее</router-link
            >
            <div class="facts-result__wrapper-img">
                <img src="img/logo.png" alt="" />
            </div>
        </div>
    </div>
</template>
