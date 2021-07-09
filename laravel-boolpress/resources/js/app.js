

window.Vue = require('vue');




Vue.component('example-component', require('./components/ExampleComponent.vue').default);


import App from './App.vue';
const app = new Vue({
    el: '#app',
    render: h => h(App)
});

