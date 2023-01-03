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
  
    <footer>
        @include('parts.footer')
    </footer>


    @vite('resources/js/app.js')
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>

    <script>
        document.addEventListener("scroll", () => {
            var scroll_position = window.scrollY;
            if (scroll_position < 60) {
                navbar.style.backgroundColor = "transparent";
                $('.darked').addClass('text-gray-100').removeClass('text-gray-800');
                

            } else {
                navbar.style.backgroundColor = "white";
                $('.darked').removeClass('text-gray-100').addClass('text-gray-800');
                console.log("ok scroll capté");
            }
        });
    </script>
</body>

</html>
