<template>
    <div class="auth">
        <button class="auth__close" @click="$emit('closeModel')">
            <img src="img/close-icon.png" alt="" />
        </button>
        <div class="auth__img">
            <img src="img/logo-big.png" alt="" />
        </div>
        <div class="auth__title">
            Регистрация
        </div>
        <div class="auth__subtitle">
            Заполните все поля, чтобы пользоваться Newink на любом устройстве
        </div>
        <form action="#" class="auth__form">
            <div class="auth__form-input">
                <input type="phone" placeholder="Виктор" />
                <label for="">Имя</label>
            </div>
            <div class="auth__form-input">
                <input type="phone" placeholder="+7" />
                <label for="">Телефон</label>
            </div>
            <div class="auth__form-input">
                <input type="password" placeholder="***********" />
                <label for="">Пароль</label>
            </div>
            <div class="auth__form-input">
                <input type="password" placeholder="***********" />
                <label for="">Повторите пароль</label>
            </div>
            <div class="auth__form-submit">
                <input type="submit" value="Далее" disabled />
            </div>
        </form>
    </div>
</template>
