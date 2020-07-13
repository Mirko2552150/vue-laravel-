import Vue from "vue";
// per usarlo eseguire NPM install vue-router
import VueRouter from "vue-router";

import Home from "./pages/Home"; // importiamo la home

import Lavori from "./pages/Lavori"; // importo la pagina LAVORI

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
            path: "/lavori",
            name: "lavori",
            component: Lavori
        }
    ]
});

export default router;
