
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import CreateFilm from './components/CreateFilm.vue';
import AllFilms from './components/AllFilms.vue';
import ViewFilm from './components/ViewFilm.vue';

const routes = [
    {
        name: 'CreateFilm',
        path: '/films/create',
        component: CreateFilm
    },
    {
        name: 'AllFilms',
        path: '/',
        component: AllFilms
    },
    {
        name: 'ViewFilm',
        path: '/films/:id',
        component: ViewFilm
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');


