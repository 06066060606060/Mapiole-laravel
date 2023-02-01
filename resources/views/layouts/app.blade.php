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

<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-af74f482-ac58-4bce-bd25-1192fdd9d5e7"></div>

<!--End of Tawk.to Script-->
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>

</body>

</html>
