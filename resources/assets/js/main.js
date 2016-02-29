
import Vue from 'vue';

/*
* Vue base
* */
var AppVue = Vue.extend({
    el: '#container',
    data: {
    }
});

/*
* Email Form
* */
new AppVue({
    inherit: true,
    el: '#mail-form',
    data: {
        hiddenCC: false,
        hiddenBCC: true,
    },
    ready: function (){

    },
    methods: {
        clickButton: function (event, type){
            if(type == 'bcc'){
                this.hiddenBCC = ! this.hiddenBCC;
            }
            if(type == 'cc'){
                this.hiddenCC = ! this.hiddenCC;
            }
        }
    }
});