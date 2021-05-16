<template>
    <div class="main">
        <Loader v-if="loading" />

        <transition name="fade">
            <div class="content" v-if="!loading">
                <Header />

                <router-view></router-view>

                <section class="pather">
                    <div class="container">
                        <div class="pather__wrapper">
                            <div class="pather__wrapper-item">
                                <img src="img/pather/item-1.png" alt="" />
                            </div>
                            <div class="pather__wrapper-item">
                                <img src="img/pather/item-2.png" alt="" />
                            </div>
                            <div class="pather__wrapper-item">
                                <img src="img/pather/item-3.png" alt="" />
                            </div>
                            <div class="pather__wrapper-item">
                                <img src="img/pather/item-4.png" alt="" />
                            </div>
                            <div class="pather__wrapper-item">
                                <img src="img/pather/item-5.png" alt="" />
                            </div>
                        </div>
                    </div>
                </section>

                <Footer />
            </div>
        </transition>
    </div>
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";
import Loader from "../components/Loader";
import { mapActions } from "vuex";

export default {
    name: "app",
    data() {
        return {
            loading: true
        };
    },
    components: {
        Header,
        Footer,
        Loader
    },
    methods: {
        ...mapActions(["fetchFilms"])
    },
    async mounted() {
        try {
            await this.fetchFilms();
            setTimeout(() => {
                this.loading = false;
            }, 200);
        } catch (e) {
        } finally {
            setTimeout(() => {
                this.loading = false;
            }, 200);
        }
    }
};
</script>
