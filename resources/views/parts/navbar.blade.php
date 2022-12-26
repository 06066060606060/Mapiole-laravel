<section id="navbar"
    class="fixed top-0 z-10 flex w-full pt-2 pb-2 transition duration-200 md:border-b md:border-gray-400 border-x-1 justify-evenly">
    <nav x-data="{ isOpen: false }" class="w-full py-2 mx-4 md:mx-8">
        <div class="items-center ">

            <div class="flex justify-around">
                <div>
                    <a class="text-2xl" href="/"><img src="./img/logo.png" class="w-auto h-20"></a>
                </div>
                <div class="items-center hidden pt-2 mx-4 lg:flex">
                    {{-- acheter --}}
                    <div x-data="{ isOpen: false }" class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen"
                            class="relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Acheter
                        </button>

                        <!-- Acheter-->
                        <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Appartement</a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Maison</a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Terrain </a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Bureau </a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Parking</a>
                        </div>
                    </div>
                    {{-- louer --}}
                    <div x-data="{ isOpen: false }" class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen"
                            class="relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Louer
                        </button>


                        <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                                              <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Appartement</a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Maison</a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Terrain </a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Bureau </a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Parking</a>

                        </div>
                    </div>
                    {{-- vendre --}}
                    <div class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <a href="vendre"
                            class="relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Vendre
                        </a>

                    </div>
                    {{-- services --}}
                    <div x-data="{ isOpen: false }" class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen"
                            class="relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Services
                        </button>


                        <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                             <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Faire construire </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Estimer mon bien </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Créer une annonce</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Agent immobilier </a>
                        </div>
                    </div>

                       <div class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <a onclick="document.getElementById('secondaryButton').click()"
                            class="relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Nous rejoindre
                        </a>

                    </div>
                </div>
                <div class="flex items-center">
                    <a href=""
                        class="text-xs md:text-base items-center justify-center w-32 md:w-40 h-10 px-2 ml-1 mr-2 text-gray-600 bg-white border border-gray-600 rounded-md flex focus:outline-none hover:bg-gray-900 hover:text-white">
                        Poster une annonce
                    </a>
                    <div x-data="{ isOpen: false }" class="relative inline-block pr-4">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen"
                            class="relative z-10 block p-[7px] text-gray-700 hover:text-gray-100  bg-white border border-gray-600 rounded-md focus:outline-none hover:bg-gray-900">
                            <i class=" fas fa-user "></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 transition duration-200 origin-top-right bg-white border border-gray-200 rounded-md shadow-xl hover:border-gray-400">

                          
                            @if (backpack_auth()->check())
                                @if (backpack_auth()->user()->role == 'admin')
                                    <a href="admin"
                                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100"
                                        data-barba-prevent="self">
                                        Dashboard </a>
                                @endif
                            @else
                              <a onclick="document.getElementById('primary_button').click()"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Se connecter </a>
                            @endif
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Profil </a>
                            <a href="logout"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Déconnection</a>
                        </div>
                    </div>
                    <button @click="isOpen = !isOpen" type="button"
                        class="text-gray-600 hover:text-gray-700 focus:outline-none focus:text-gray-800 "
                        aria-label="toggle menu">
                        <svg x-cloak x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-cloak x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>


        <div class="flex justify-center pt-4 lg:hidden">
            {{-- acheter --}}
            <div x-data="{ isOpen: false }" class="relative inline-block">
                <!-- Dropdown toggle button -->
                <button @click="isOpen = !isOpen"
                    class="text-xs relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                    Acheter
                </button>

                <!-- acheter-->
                <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="absolute left-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                     <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Appartement</a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Maison</a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Terrain </a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Bureau </a>
                            <a href="acheter"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Parking</a>
                </div>
            </div>
            {{-- louer --}}
            <div x-data="{ isOpen: false }" class="relative inline-block">
                <!-- Dropdown toggle button -->
                <button @click="isOpen = !isOpen"
                    class="text-xs relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                    Louer
                </button>


                <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="absolute left-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                    <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Appartement</a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Maison</a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Terrain </a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Bureau </a>
                            <a href="louer"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Parking</a>
                </div>
            </div>
           {{-- vendre --}}
                    <div class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <a href="vendre"
                            class="text-xs relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Vendre
                        </a>

                    </div>
                    {{-- services --}}
                    <div x-data="{ isOpen: false }" class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <button @click="isOpen = !isOpen"
                            class="text-xs relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Services
                        </button>


                        <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl ">
                             <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Faire construire </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Estimer mon bien </a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Créer une annonce</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-gray-100 ">
                                Agent immobilier </a>
                        </div>
                    </div>

                       <div class="relative inline-block">
                        <!-- Dropdown toggle button -->
                        <a onclick="document.getElementById('secondaryButton').click()"
                            class="text-xs relative z-10 block p-2 mx-2 font-bold text-gray-100 hover:text-gray-800 hover:border-b-4 hover:border-gray-900 darked">
                            Nous rejoindre
                        </a>

                    </div>
        </div>

        <!-- // pop menu  -->
        <div x-cloak :class="[!isOpen ? 'translate-x-full opacity-0 ' : 'opacity-100 translate-x-0']"
            class="absolute right-0 z-20 px-6 py-4 mt-6 transition duration-200 ease-in-out bg-white border border-gray-200 rounded-md shadow-xl w-72 hover:border-gray-400">
            <div class="flex flex-col pb-4 space-y-2 align-baseline md:pb-0">

                <details class="group" open>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="font-black text-gray-900 text-md">
                            Rechercher
                        </h5>
                        <span>
                            <img class="w-4 h-4" src="./img/plus.png" alt="">
                        </span>
                    </summary>

                    <div class="flex flex-col">
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="/">&nbsp; -A louer</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -A vendre</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Un professionel</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Un locataire</a>
                    </div>
                </details>
                <div class="pt-2 mb-2 border-b border-gray-200"></div>


                <details class="group" open>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="font-black text-gray-900 text-md">
                            Vendre
                        </h5>
                        <span>
                            <img class="w-4 h-4" src="./img/plus.png" alt="">
                        </span>
                    </summary>

                    <div class="flex flex-col">
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="/">&nbsp; -Maison</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Appartement</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Terrain</a>
                         <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Bureau</a>
                    </div>
                    </div>
                </details>
                <div class="pt-2 mb-2 border-b border-gray-200"></div>

                <details class="group" open>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="font-black text-gray-900 text-md">
                            Louer
                        </h5>
                        <span>
                            <img class="w-4 h-4" src="./img/plus.png" alt="">
                        </span>
                    </summary>

                    <div class="flex flex-col">
       <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="/">&nbsp; -Maison</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Appartement</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Terrain</a>
                         <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Bureau</a>
                    </div>
                </details>
                <div class="pt-2 mb-2 border-b border-gray-200"></div>

                <details class="group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="font-black text-gray-900 text-md">
                            Services
                        </h5>
                        <span>
                            <img class="w-4 h-4" src="./img/plus.png" alt="">
                        </span>
                    </summary>
                    <div class="flex flex-col">
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Recherche immobilière</a>
                         <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; -Estimation immobilière</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Conseil et acommpagnement</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp;-document administratif</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp;-Notariat</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp;-Avocat</a>
                        <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; -Agent immobilier</a>
                    </div>

                </details>
                <p class="mt-4 text-sm leading-relaxed text-gray-700">
                <div class="border-b border-gray-200 mb-2"></div>
                <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="recherche">&nbsp; Partenaires</a>
                <a class="px-2 py-1 text-sm text-gray-600 hover:bg-gray-100" href="construire">&nbsp; Contact</a>
                <a href="./annonce.html"
                    class="flex items-center justify-center w-40 h-10 px-2 ml-1 mr-2 text-xs text-gray-600 border border-gray-600 rounded-md lg:hidden focus:outline-none hover:bg-gray-900 hover:text-white">
                    Poster une annonce
                </a>
            </div>
        </div>

    </nav>
</section>
