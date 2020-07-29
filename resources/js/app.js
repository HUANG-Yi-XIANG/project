import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './login';
import home from './home';
Vue.use(VueRouter);
let path = window.location.pathname;
path =path.replace('/project/public/','');
let router="";
switch (path) {
    case 'home':
        router = home;
        break;

    default:
        router = routes;
        break;
}
let app = new Vue({
    el: '#app',
    router: new VueRouter(router)
});
