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
            component: () => import("../views/Facts")
        },
        {
            path: "/factsdetail",
            name: "factsdetail",
            component: () => import("../views/FactDetail")
        }
    ]
});

export default router;
