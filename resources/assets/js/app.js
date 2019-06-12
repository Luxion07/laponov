
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';


window.Vue.use(VueRouter);


import MainScreen from './components/admin/main/MainScreen.vue';
import infoIndex from './components/admin/information/infoIndex.vue';

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const routes = [

    {path: '/', component: MainScreen, name: 'mainScreen'},
    {path: '/information', component: infoIndex, name: 'infoindex'},

    {path: '/companies', component: CompaniesIndex, name: 'companiesIndex'},
    {path: '/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/edit/:id', component: CompaniesEdit, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
