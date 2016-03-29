import Vue from 'vue';

Vue.use(require('vue-resource'));

import MailForm from './components/mail.vue';
import Wheather from './components/weather.vue';

/*
* Vue base
* */
var app = new Vue({
    el: '.page-container',
    components: {
        MailForm,
        Wheather
    }
});
