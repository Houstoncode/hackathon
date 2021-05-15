import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/Home')
    },
    {
      path: '/facts',
      name: 'facts',
      component: () => import('../views/Facts')
    },
    {
      path: '/factsdetail',
      name: 'factsdetail',
      component: () => import('../views/FactDetail')
    },
  ],
});

export default router;