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
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='{{ Setting::get('tawk_url') }}';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
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
