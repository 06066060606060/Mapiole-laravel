<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
</head>


<body>
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
    <!--Start of Tawk.to Script-->

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-baf1ff36-7d9e-4c20-b95e-ab4345b4c45a"></div>

<!--End of Tawk.to Script-->
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
