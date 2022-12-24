<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>

<body data-barba="wrapper">
    <navbar>
        @include('parts.navbar')
    </navbar>
    <main>
        @yield('main')
    </main>





    @vite('resources/js/app.js')

    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>
       <script>
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
        });

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
        })

          document.addEventListener("scroll", () => {
  var scroll_position = window.scrollY;
  if (scroll_position < 60) {
    navbar.style.backgroundColor = "transparent";
     $('.darked').addClass('text-gray-100').removeClass('text-gray-800');

  } else 
  {
    navbar.style.backgroundColor = "white";
    $('.darked').removeClass('text-gray-100').addClass('text-gray-800');
    console.log("ok scroll capté");
  }
});
    </script>
</body>

</html>
