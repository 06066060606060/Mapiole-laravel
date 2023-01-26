<nav id="navbar" class="fixed top-0 z-50 w-full pt-2 pb-2 text-gray-800 transition duration-200 bg-white border-b border-gray-400 border-opacity-50 " >
    <div class="flex flex-wrap items-center w-full px-4 md:px-6 py-2.5 justify-around " >
        <a href="/" class="flex items-center mr-16"  >
         <img src="{{asset('img/logo.png')}}" class="h-32 mr-3" alt=" Logo" />
            {{-- <img src="{{asset('img/blob.svg')}}" class="absolute h-32 ml-16 -z-10" alt=" Logo" /> --}}
        </a>
        <button data-collapse-toggle="mega-menu-full" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-indigo-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <div id="mega-menu-full"
            class="items-center justify-between hidden w-full pb-4 mt-10 bg-white rounded-md shadow-xl lg:flex lg:w-auto lg:order-1 lg:bg-transparent lg:mt-0 lg:shadow-transparent">

            <ul class="flex flex-col w-full mt-4 text-sm font-medium lg:flex-row lg:space-x-4 lg:mt-0">

                <li>
                    <button> <a href="/achat-bien-immobilier-cameroun/"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 mt-2 font-medium text-black border-b border-gray-100 megabutton lg:w-auto hover:bg-indigo-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 ">Rechercher
                        </a></button>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button2" data-collapse-toggle="mega-menu-full-dropdown2"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 mt-2 font-medium text-black border-b border-gray-100 megabutton lg:w-auto hover:bg-indigo-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 ">Acheter
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button3" data-collapse-toggle="mega-menu-full-dropdown3"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 mt-2 font-medium text-black border-b border-gray-100 megabutton lg:w-auto hover:bg-indigo-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 ">Vendre
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button4" data-collapse-toggle="mega-menu-full-dropdown4"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 mt-2 font-medium text-black border-b border-gray-100 megabutton lg:w-auto hover:bg-indigo-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 ">Louer
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button5" data-collapse-toggle="mega-menu-full-dropdown5"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 mt-2 font-medium text-black border-b border-gray-100 megabutton lg:w-auto hover:bg-indigo-300 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-600 lg:p-0 ">Services
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                </li>
                <li>
                   @if (backpack_auth()->check())
                            <a href="poster-annonce"

                <li>
                    <div class="flex items-center mt-2 lg:mt-0">
                        @if (backpack_auth()->check())
                            <a href="admin/location/create"
                                class="text-xs lg:text-base font-medium items-center justify-center w-48 h-10 px-1 ml-1 mr-2 text-gray-600 bg-white border border-gray-600 rounded-lg flex focus:outline-none hover:bg-[#6805F2] hover:text-white">
                                Poster une annonce
                            </a>
                        @else
                            <a href="admin/login"
                                class="text-xs xl:text-base font-medium items-center justify-center w-48  h-10 px-1 ml-1 mr-2 text-gray-600 bg-white border border-gray-600 rounded-lg flex focus:outline-none hover:bg-[#6805F2] hover:text-white">
                                Poster une annonce
                            </a>
                        @endif

                        <a href="professionnel"
                            class="text-xs lg:text-base font-medium items-center justify-center w-32 mr-2 h-10 px-2 ml-1  text-gray-600 bg-white border border-gray-600 rounded-lg flex focus:outline-none hover:bg-[#6805F2] hover:text-white">
                            Professionel
                        </a>


                        <div x-data="{ isOpen: false }" class="relative inline-block pr-4">
                            <!-- Dropdown toggle button -->
                            <button @click="isOpen = !isOpen" type="button"
                                class="mega-menu-link relative z-10 block p-[8px] text-gray-700 hover:text-gray-100  bg-white border border-gray-600 rounded-lg focus:outline-none hover:bg-[#6805F2]">
                                <i class=" fas fa-user"></i>
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
                                    <a href="admin"
                                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300"
                                        data-barba-prevent="self">
                                        Dashboard </a>
                                @else
                                    <a href="admin/login"
                                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform prevent hover:bg-indigo-300 ">
                                        Se connecter </a>
                                @endif
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300 ">
                                    Profil </a>

                                @if (backpack_auth()->check())
                                    <a href="admin/logout"
                                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300 prevent">
                                        Déconnection</a>
                                @endif
                            </div>
                        </div>
















                    </div>
                </li>


            </ul>

        </div>
    </div>

    <div id="mega-menu-full-dropdown" class="hidden mt-1 bg-white border-gray-200 shadow-sm border-y">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre un appartement</div>

                    </a>
                </li>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Terrain&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter un terrain
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre une maison</div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Construction</div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Trouver une main d'oeuvre</div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>

                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Immobilier commercial
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=Appartement&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Appartement meublé à louer

                        </div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Trouver un locataire
                        </div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Consulter un expert immobilier</div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Accompagnement procédures administratives
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>

                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Nos meilleures recommandations
                        </div>

                    </a>
                </li>
                <li>

                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Investissement locatif

                        </div>

                    </a>
                </li>
                <li>

                    <a href="services" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Services immobiliers

                        </div>

                    </a>
                </li>
            </ul>
        </div>
    </div>





    <div id="mega-menu-full-dropdown2" class="hidden mt-1 bg-white border-gray-200 shadow-sm border-y ">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button2">
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Appartement&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter un appartement
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Maison&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter une maison
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Terrain&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter un terrain
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Bureau&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter des bureaux
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Commerce&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter un espace commercial
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Villa&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter une villa
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Appartement&prix=&surface=&nb_pieces="
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Acheter un immeuble
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Consulter un expert immobilier
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Guide d'achat de biens immobiliers
                        </div>

                    </a>
                </li>
            </ul>
        </div>
    </div>







    <div id="mega-menu-full-dropdown3" class="hidden mt-1 bg-white border-gray-200 shadow-sm border-y ">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button3">
                <li>
                    <a href="/admin/vente/create" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre un appartement
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/vente/create" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre une maison
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/vente/create" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre un terrain
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre des bureaux
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre un espace commercial
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre une villa
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/vente/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Vendre un immeuble
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Confier mon bien à vendre
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Consulter un expert immobilier
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="p-3 rounded-lg mega-menu-linkblock hover:bg-indigo-300 ">
                        <div class="font-medium">Guide de vente de biens immobiliers

                        </div>

                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="mega-menu-full-dropdown4" class="hidden mt-1 bg-white border-gray-200 shadow-sm border-y ">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button4">
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer un appartement
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer une maison
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer des bureaux
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer un espace commercial
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer un terrain</div>

                    </a>
                </li>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer une villa
                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer un appartement meublé
                        </div>

                    </a>
                </li>
                <li>
                    <a href="/admin/location/create"
                        class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Louer un terrain commercial
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Guide de location de biens immobiliers</div>

                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div id="mega-menu-full-dropdown5" class="hidden mt-1 bg-white border-gray-200 shadow-sm border-y">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button5">
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Consulter un expert immobilier
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Commander un document administratif </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Commander une main d’oeuvre
                        </div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Suivre son dossier personnel
                        </div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Morcellement</div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Titre foncier
                        </div>

                    </a>
                </li>

                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Topographie</div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Immatriculation foncière
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Architecture technique et design
                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Trouver un notaire

                        </div>

                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Trouver un avocat

                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Trouver un agent immobilier

                        </div>

                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded-lg mega-menu-link hover:bg-indigo-300 ">
                        <div class="font-medium">Guide d'investissement immobilier
                        </div>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    //$('.megabutton').mouseenter(function() { $(this).click() });
    $('#mega-menu-full-dropdown-button').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1')
            .addClass('hidden');
    });
    $('#mega-menu-full-dropdown-button1').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
    $('#mega-menu-full-dropdown-button2').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown1, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
    $('#mega-menu-full-dropdown-button3').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
    $('#mega-menu-full-dropdown-button4').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
    $('#mega-menu-full-dropdown-button5').click(function() {
        $('#mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
    $('.mega-menu-link').click(function() {
        $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown')
            .addClass('hidden');
    });
</script>
<style>

</style>
