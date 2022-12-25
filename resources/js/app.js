import './bootstrap';
import Alpine from 'alpinejs'
import barba from '@barba/core';
window.Alpine = Alpine;
 
Alpine.start();


barba.init();
        barba.hooks.afterEnter((data) => {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1.5,
                spaceBetween: 24,
                centeredSlides: true,
                autoplay: {
                    delay: 8000,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    800: {
                        slidesPerView: 3,
                    },
                    1100: {
                        slidesPerView: 4,
                    },
                },
            })

            var swiper2 = new Swiper('.mySwiper', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                  delay: 4500,
                  disableOnInteraction: false,
                },
                pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
                },
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
              })


        })

        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1.5,
                spaceBetween: 24,
                centeredSlides: true,
                autoplay: {
                    delay: 8000,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    800: {
                        slidesPerView: 3,
                    },
                    1100: {
                        slidesPerView: 4,
                    },
                },
            })

            var swiper2 = new Swiper('.mySwiper', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                  delay: 4500,
                  disableOnInteraction: false,
                },
                pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
                },
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
              })
        })