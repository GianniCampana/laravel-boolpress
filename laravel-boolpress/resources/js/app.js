

window.Vue = require('vue');




Vue.component('example-component', require('./components/ExampleComponent.vue').default);


import App from './App.vue';
import router from './routes';
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});


