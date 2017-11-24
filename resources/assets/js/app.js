
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('project-component', require('./components/project/ProjectComponent.vue'));
Vue.component('create-project-component', require('./components/project/CreateProjectComponent.vue'));
Vue.component('project-view-component', require('./components/project/ProjectViewComponent.vue'));
Vue.component('todo-component', require('./components/todo/TodoComponent.vue'));

const app = new Vue({
    el: '#app'
});
