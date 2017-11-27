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
Vue.component('topic-component', require('./components/topic/TopicComponent.vue'));

Vue.component('new-message-component', require('./components/message/NewMessageComponent.vue'));
Vue.component('specific-message-component', require('./components/message/SpecificMessageComponent.vue'));
Vue.component('edit-message-component', require('./components/message/EditMessageComponent.vue'));


Vue.component('create-new-document-component', require('./components/document/CreateNewDocumentComponent.vue'));
Vue.component('view-document-component', require('./components/document/ViewComponent.vue'));
Vue.component('index-document-component', require('./components/document/IndexDocumentComponent.vue'));

const app = new Vue({
    el: '#app'
});
