/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap"; // BOOTSTRAP

import Vue from "vue"; // importa VUE
import Routes from "./routes.js"; // importa Routes

import App from "./views/App";

const app = new Vue({ // istanza
    el: "#app",
    router: Routes, // simile a DATA
    render: h => h(App)
});

export default app; // la fa vedere a tutti i file
