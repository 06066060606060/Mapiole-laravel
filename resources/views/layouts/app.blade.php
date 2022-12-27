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
    <div x-data="{ modelOpen: false }" class="flex justify-center">

        <button @click="modelOpen =!modelOpen" id="primary_button" class="hidden">
        </button>

        <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-80" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full pt-32 mx-4 overflow-hidden transition-all transform">

                    <div class="flex flex-col max-w-md mx-auto mt-6 mb-0 bg-white rounded-md shadow-2xl">
                        <div class="flex flex-row-reverse pr-4">
                            <img class="w-6 h-6 mt-4 transition-colors duration-100 transform opacity-100 hover:opacity-25"
                                src="/img/iconclose.png" @click="modelOpen = false">
                        </div>
                        <form action="admin/login" class="m-4 space-y-6" method="post">
                            @csrf
                            <h1 class="text-3xl font-bold text-center text-gray-800">Se connecter</h1>
                            <div class="space-y-1 text-sm">
                                <label for="email" class="block text-gray-800">email</label>
                                <input type="email" name="email" id="email" placeholder="exemple@mail.com"
                                    class="w-full px-4 py-3 text-black bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                    required>
                            </div>
                            <div class="space-y-1 text-sm">
                                <label for="password" class="block text-gray-800">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="w-full px-4 py-3 text-black bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                    required>

                            </div>
                            <button
                                class="block w-full p-3 font-bold text-center text-white transition-colors duration-200 rounded bg-emerald-500 hover:bg-emerald-400 focus:bg-emerald-400">Se
                                Connecter</button>
                        </form>
                        <p class="text-gray-800">ou</p>
                        <a href="#"
                            class="mx-4 flex items-center justify-center p-3 my-4 text-white transition-colors duration-300 transform rounded bg-blue-900  hover:bg-blue-700 active:bg-blue-900">
                            <svg class="w-6 h-6 mx-2" viewBox="0 0 40 40">
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#FFC107" />
                                <path
                                    d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                    fill="#FF3D00" />
                                <path
                                    d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                    fill="#4CAF50" />
                                <path
                                    d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                    fill="#1976D2" />
                            </svg>

                            <span class="">Connectez-vous avec Google</span>
                        </a>
                        <p class="pb-4 text-xs text-center text-gray-400 sm:px-6">Pas encore de compte? &zwnj;
                            <a rel="noopener noreferrer" href="#" @click="modelOpen = false"
                                onclick="document.getElementById('secondaryButton').click()"
                                class="text-blue-600 underline"> Inscrivez-vous</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ modelOpen: false }" class="flex justify-center">

        <button @click="modelOpen =!modelOpen" id="secondaryButton" class="hidden">
        </button>

        <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-80" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full pt-24 mx-4 overflow-hidden transition-all transform">

                    <div class="flex flex-col max-w-md mx-auto mt-6 mb-0 bg-white rounded-md shadow-2xl">

                        <div class="flex flex-row-reverse pr-4">
                            <img class="w-6 h-6 mt-4 transition-colors duration-100 transform opacity-100 hover:opacity-25"
                                src="/img/iconclose.png" @click="modelOpen = false">
                        </div>

                        <div class="m-4">
                            <img src="./img/logo.png" alt="logo" class="w-48 h-auto mx-auto mb-8">
                            <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize ">
                                Inscription
                            </h1>

                            <p class="mt-4 text-gray-800 ">
                                Particulier ou Professionnel, rejoignez la communauté Mapiole
                            </p>


                            <form action="admin/register" class="m-4 space-y-6" method="post">
                                @csrf
                                <div class="space-y-1 text-sm">
                                    <label for="" class="block text-gray-800">Nom d'utilisateur</label>
                                    <input type="text" name="name" id="name" placeholder=""
                                        class="w-full px-4 py-3 text-gray-800 bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                        required>
                                </div>
                                <div class="space-y-1 text-sm">
                                    <label for="email" class="block text-gray-800">email</label>
                                    <input type="email" name="email" id="email2"
                                        placeholder="exemple@mail.com"
                                        class="w-full px-4 py-3 text-gray-800 bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                        required>
                                </div>
                                <div class="space-y-1 text-sm">
                                    <label for="password" class="block text-gray-800">Mot de passe</label>
                                    <input type="password" name="password" id="password2" placeholder=""
                                        class="w-full px-4 py-3 text-gray-800 bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                        required>

                                </div>
                                <div class="space-y-1 text-sm">
                                    <label for="password" class="block text-gray-800">Confirmation du mot de
                                        passe</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder=""
                                        class="w-full px-4 py-3 text-gray-800 bg-gray-100 border-gray-700 rounded-md focus:border-emerald-400"
                                        required>

                                </div>
                                <button
                                    class="block w-full p-3 font-bold text-center text-white transition-colors duration-200 rounded bg-emerald-500 hover:bg-emerald-400 focus:bg-emerald-400">S'enregistrer</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
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
