<template>
    <div class="main">
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
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";

export default {
    name: "app",
    components: {
        Header,
        Footer
    }
};
</script>
