

window.axios = require('axios')
window.Vue = require('vue')
window.Flickity = require('flickity')

import * as VueLazyLoad from "vue-lazyload"
Vue.use(VueLazyLoad, {
    lazyComponent: true
});

import { ValidationProvider } from 'vee-validate';
import "./modules/vee-validate";
// Register validation componenta globally
Vue.component('ValidationProvider', ValidationProvider);

import moment from 'moment'

Vue.filter('formatStartDate', function(value) {
  	if (value) {
    	return moment(String(value),'DD MM YYYY').format('DD')
  	}
});

Vue.filter('formatEndDate', function(value) {
  	if (value) {
    	return moment(String(value),'DD MM YYYY').format('DD MMMM YYYY')
  	}
});

import eimage from './components/common/ImageLazy';
import responsive_image from './components/common/ImageResponsive';
import VideoComponent from './components/common/VideoComponent';
import contact_modal from './sections/Contact.vue';
import service_list from './sections/ServiceList.vue';

// Global
Vue.component('eimage', eimage);

Vue.config.productionTip = false

let app;
new Vue({
    el: '#app',
	components: {
        eimage,responsive_image,VideoComponent,contact_modal,service_list
    },
    methods: {
        scrollTo(selector) {
            document.querySelector(selector).scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"})
        }
    },
	rended: h => h(app)
})

require('./modules/dropdown.js')
