import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './login';
import uploadImage from './components/uploadImage';
import userUpdate from './components/userUpdate';

// import home from './home';
Vue.use(VueRouter);
Vue.component("upload-image", uploadImage);
Vue.component("user-update", userUpdate);

// let path = window.location.pathname;
// path =path.replace('/project/public/','');
// let router="";
// switch (path) {
//     case 'home':
//         router = home;
//         break;

//     default:
//         router = routes;
//         break;
// }


let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
let upDateUser = new Vue({
    el: '#upDateUser',
    router: new VueRouter(routes)
});