import Vue from "vue";
// per usarlo eseguire NPM install vue-router
import VueRouter from "vue-router";

import Home from "./pages/Home"; // importiamo la home

import Test from "./pages/Test"; // importo la pagina TEST

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/", // dove deve reagire
            name: "home", // il nome
            component: Home // uguale al name
        },
        {
            path: "/test",
            name: "test",
            component: Test
        }
    ]
});

export default router;
