import VueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('./components/Main.vue') },
        { path: '/login', component: require('./components/Login.vue') },
        { path: '/about', component: require('./components/About.vue') },
    ],

    // ブラウザバックしたときにスクロールをいい感じにする
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
})