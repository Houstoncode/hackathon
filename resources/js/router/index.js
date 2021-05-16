import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("../views/Home")
        },
        {
            path: "/facts",
            name: "facts",
            component: () => import("../views/Facts"),
            meta: {
                title: "Wink Promo - Факты"
            }
        },
        {
            path: "/factsdetail",
            name: "factsdetail",
            component: () => import("../views/FactDetail"),
            meta: {
                title: "Wink Promo - Факты"
            }
        }
    ]
});

router.beforeEach((toRoute, fromRoute, next) => {
    window.document.title =
        toRoute.meta && toRoute.meta.title ? toRoute.meta.title : "Wink Promo";

    next();
});

export default router;
