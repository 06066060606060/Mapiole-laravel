import './bootstrap';
import Alpine from 'alpinejs'
window.Alpine = Alpine;

Alpine.start();



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
  $(window).scrollTop(0);
  $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown').addClass('hidden');
  $('#mega-menu-full').addClass('hidden');

document.addEventListener('DOMContentLoaded', function () {
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
  });
});