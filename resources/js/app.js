require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import vuetify from '../plugins/vuetify' // path to vuetify export

//Vue.use(Vuetify)


//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('AppHome', require('./components/AppHome.vue').default);
//import router from './Router/router.js'

new Vue({
    vuetify,
}).$mount('#app')
