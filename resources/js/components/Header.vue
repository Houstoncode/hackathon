<template>
    <header class="header">
        <div class="container">
            <div class="header__left">
                <a href="/" class="header__logo">
                    <img src="img/logo.png" alt="" />
                </a>
                <nav class="menu">
                    <ul class="menu__ul">
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Фильмы</a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Сериалы</a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Мультфильмы</a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Книги</a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Спорт</a>
                        </li>
                        <li class="menu__list">
                            <a href="#" class="menu__list-link">Акции</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__right">
                <div class="header__right-img">
                    <img src="img/exit-icon.png" alt="" />
                </div>
                <button class="header__right-link header__right-login">
                    Вход
                </button>
                <div class="header__right-line">|</div>
                <button
                    class="header__right-link header__right header__right-register"
                >
                    Регистрация
                </button>
            </div>
        </div>

        <Login />
        <Register />
    </header>
</template>

<script>
import Login from "./header/Login";
import Register from "./header/Register";

export default {
    components: {
        Login,
        Register
    }
};
</script>
