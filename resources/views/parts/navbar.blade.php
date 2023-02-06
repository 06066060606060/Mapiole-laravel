<div class=" w-full max-w-[1440px] mx-auto">
    <div x-data="{ open: false }"
        class="flex flex-col p-2 mx-2 md:items-center md:justify-between md:flex-row md:px-4 lg:mx-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a href="/"><img src="{{ asset('img/logo.png') }}" class="w-auto h-16 mr-3 " alt=" Logo" /> </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" style="display: none"></path>
                </svg>
            </button>
        </div>

        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col items-center flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row lg:pl-2">
            <a class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                href="recherche">Rechercher</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-500 md:w-auto md:inline md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <span>Louer</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
                    style="display: none;">
                    <div class="w-48 px-2 py-2 bg-white border rounded-md shadow">
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">Appartement</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">Maison</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">Villa</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">terrain</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">bureau</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="location-bien-immobilier-cameroun">Espace commercial</a>
                    </div>
                </div>
            </div>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-500 md:w-auto md:inline md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <span>Acheter</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
                    style="display: none;">
                    <div class="w-48 px-2 py-2 bg-white border rounded-md shadow">
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">Appartement</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">Maison</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">Villa</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">terrain</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">bureau</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="achat-bien-immobilier-cameroun">Espace commercial</a>
                    </div>
                </div>
            </div>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-500 md:w-auto md:inline md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <span>Vendre</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
                    style="display: none;">
                    <div class="w-48 px-2 py-2 bg-white border rounded-md shadow">
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Appartement</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Maison</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Villa</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">terrain</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">bureau</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Espace commercial</a>
                    </div>
                </div>
            </div>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-500 md:w-auto md:inline md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <span>Services</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
                    style="display: none;">
                    <div class="w-48 px-2 py-2 bg-white border rounded-md shadow">
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Rechercher un professionnel</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Document administratif</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Morcellement</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Titre foncier</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Topographie</a>
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                            href="#">Immatriculation foncière</a>
                    </div>
                </div>
            </div>

             <div id="google_translate_element"></div>

            <div class="inline-flex items-center gap-2 mt-2 list-none lg:ml-16 md:mt-0">
                @if (backpack_auth()->check())
                    <a href="admin/location/create"
                        class="flex items-center justify-center h-10 px-1 ml-1 mr-2 text-xs font-medium text-gray-600 bg-white border border-gray-600 rounded-lg w-36 focus:outline-none hover:bg-blue-600 hover:text-white">
                        Poster une annonce
                    </a>
                @else
                    <a href="admin/location/create"
                        class="flex items-center justify-center h-10 px-1 ml-1 mr-2 text-xs font-medium text-gray-600 bg-white border border-gray-600 rounded-lg w-36 focus:outline-none hover:bg-blue-600 hover:text-white">
                        Poster une annonce
                    </a>
                @endif
                {{-- <a  href="professionnel"
                                class="text-xs lg:text-base font-medium items-center justify-center w-32 mr-2 h-10 px-2 ml-1  text-gray-600 bg-white border border-gray-600 rounded-lg flex focus:outline-none hover:bg-[#6805F2] hover:text-white">
                                Professionel
                            </a> --}}
            </div>

            <div x-data="{ isOpen: false }" class="relative inline-block pr-4 mt-2 md:mt-0">
                <!-- Dropdown toggle button -->
                <button @click="isOpen = !isOpen" type="button"
                    class="mega-menu-link relative z-10 block p-[8px] text-gray-700 hover:text-gray-100  bg-white border border-gray-600 rounded-lg focus:outline-none hover:bg-blue-600">
                    <i class=" fas fa-user"></i>
                </button>

                <!-- Dropdown menu -->
                <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="absolute right-0 z-20 w-48 py-2 mt-2 transition duration-200 origin-top-right bg-white border border-gray-200 rounded-md shadow-xl hover:border-gray-400">


                    @if (backpack_auth()->check())
                        @if (backpack_auth()->user()->role == 'admin')
                            <a href="admin"
                                class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300"
                                data-barba-prevent="self">
                                Dashboard </a>
                        @endif
                    @else
                        <a href="admin/login"
                            class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform prevent hover:bg-indigo-300 ">
                            Se connecter </a>
                    @endif
                    <a href="#"
                        class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300 ">
                        Profil </a>

                    @if (backpack_auth()->check())
                        <a href="logout"
                            class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform hover:bg-indigo-300 prevent">
                            Déconnection</a>
                    @endif
                </div>
            </div>


        </nav>
    </div>
</div>
 <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'fr', includedLanguages: 'fr,en,ar,de,es,pt,ru,zh-CN', autoDisplay: false, text: 'Language'},
                'google_translate_element',
            );
        }
    </script>
 
    <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <style>
        #google_translate_element select{
 color:gray;
 border-radius:8px;
 padding:6px 8px;
 margin-top: 20px;
 padding: 6px;
 }
 .goog-logo-link{
   display:none!important;
  }
 .goog-te-gadget{
 color:transparent!important;
    display:none!important;
 } 
 .goog-te-banner-frame{
 display:none !important;
 height:0px !important;
 }

 #goog-gt-tt, .goog-te-balloon-frame{
    display: none !important;
    }
.goog-text-highlight {
     background: none !important; box-shadow: none !important;
       
     }
.goog-te-combo option:first-of-type{
  content:'Translator';
     }
     .VIpgJd-ZVi9od-l4eHX-hSRGP{
         display:none;
     }

    </style>