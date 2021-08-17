import Vue from "vue";


const Modal = {
    name: 'modal',
    template: '#modal',
    methods: {
        close(event) {
            this.$emit('close');
        },
    },
};

new Vue({
    el: '#app',
    name: 'app',
    components: {
        modal: Modal,
    },
    data () {
        return {
            isModalVisible: false,
        };
    },
    methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    },
});




// import Vue from "vue";
//
// import { createApp } from 'vue';
// import App from './Components/ModalComponent.vue'
//
//
// require('./bootstrap');
// // //
// // window.Vue = require('vue');
//
// //
// // Vue.component('modal', {
// //     template: "modal-template"
// // });
//
// window.Vue = require('vue');
//
// import Vue from "vue";
// // import VueRouter from 'vue-router';
// // import router from "./router";
// // import App from "./Components/App";
// // // Vue.component('modal', require('./components/ModalComponent.vue').default);
// const app = new Vue({
//     el: '#app',
//  });
// import Vue from "vue";
//
// const app = new Vue({
//     el: '#app',
//     data: {
//         message: 'Hello Vue'
//     }
// });


// new Vue({
//     el: '#modal'
// });


