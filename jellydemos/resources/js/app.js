
require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Carousel Testimonials
// document.addEventListener('DOMContentLoaded', function () {
//     jQuery(document).ready(function($){
//         $('.owl-carousel').owlCarousel({
//             loop:true,
//             margin:10,
//             nav:true,
//             responsive:{
//                 0:{
//                     items:1
//                 },
//                 600:{
//                     items:1
//                 },
//                 1000:{
//                     items:1
//                 }
//             }
//         })
//     })
// })

document.addEventListener('DOMContentLoaded', function () {

    // Carousel Testimonials
    jQuery(document).ready(function($){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    })

    new Vue({
        el: '#app',
        data: {
            scrollPosition: null,
        },
        mounted() {
            window.addEventListener('scroll', this.updateScroll);
        },
        methods: {
            updateScroll() {
                this.scrollPosition = window.scrollY
            },
            AboutScroll() {
                window.scrollTo(100, 900);
            },
        },
    });
})
