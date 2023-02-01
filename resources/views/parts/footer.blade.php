    @php use \App\Http\Controllers\GlobalController; @endphp
    @php  $pages = GlobalController::pages();@endphp
    @php $mail = $pages[5]->content; @endphp
    @php $phone = $pages[4]->content; @endphp

    <section id="foot" class="pt-8 mx-4 bg-white">
        <div class=" px-6 py-8 mx-auto max-w-[1440px]">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="flex flex-col items-center">
                    <div class="text-xl font-medium text-gray-800 uppercase">
                        Immobilier à louer
                    </div>

                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=Appartement&prix=&surface=&nb_pieces="
                        class="block mt-5 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Appartement à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/"
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Immobilier à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=Maison&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Maison à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Construction neuve à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Objet meublé à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=Terrain&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Terrain à louer
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Place de parking à louer
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <div class="text-xl font-medium text-gray-800 uppercase">
                        Immobilier à vendre
                    </div>

                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Appartement&prix=&surface=&nb_pieces="
                        class="block mt-5 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Appartement à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Immobilier à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Maison&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Maison à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Construction neuve à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=Terrain&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Terrain à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Place de parking à vendre
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Immeuble d'habitation à vendre
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <div class="text-xl font-medium text-gray-800 uppercase">
                        Louer un bien à
                    </div>

                    <a href="/location-bien-immobilier-cameroun/filter?q=Yaoundé&type=&prix=&surface=&nb_pieces="
                        class="block mt-5 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Yaoundé
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Douala&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Douala
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Bafoussam&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bafoussam
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Garoua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Garoua
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Kribi&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Kribi
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Buéa&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Buéa
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Bamenda&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bamenda
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Maroua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Maroua
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Limbé&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Limbé
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Bertoua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bertoua
                    </a>
                    <a href="/location-bien-immobilier-cameroun/filter?q=Ebolowa&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Ebolowa
                    </a>
                </div>

                <div class="flex flex-col items-center">
                    <div class="text-xl font-medium text-gray-800 uppercase">
                        Acheter un objet à
                    </div>

                    <a href="/achat-bien-immobilier-cameroun/filter?q=Yaoundé&type=&prix=&surface=&nb_pieces="
                        class="block mt-5 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Yaoundé
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Douala&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Douala
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Bafoussam&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bafoussam
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Garoua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Garoua
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Kribi&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Kribi
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Buéa&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Buéa
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Bamenda&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bamenda
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Maroua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Maroua
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Limbé&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Limbé
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Bertoua&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Bertoua
                    </a>
                    <a href="/achat-bien-immobilier-cameroun/filter?q=Ebolowa&type=&prix=&surface=&nb_pieces="
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 hover:text-gray-400 hover:underline">
                        Ebolowa
                    </a>
                </div>
            </div>

            <hr class="mt-10 border-gray-200">

        </div>
    </section>

    <div class="border border-gray-200 footergrad">
        <div
            class=" p-6 mx-auto max-w-[1440px] flex flex-col md:flex-row justify-center md:justify-between items-center text-center">

            <div class="w-full -mx-6 lg:w-2/5">
                <div class="px-6">
                    <div>
                        <a class="flex justify-center md:justify-start" href="./index.html">
                            <img src="./img/logo.png" class="w-auto h-28">
                        </a>
                    </div>

                    <p class="max-w-sm mt-4 text-center text-gray-100 md:text-left">Peu importe ce que vous cherchez<br>
                        trouver
                        le logement de vos rêves.</p>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 lg:flex-1 ">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div>
                        <h3 class="text-gray-100 uppercase ">A propos</h3>
                        <a href="company" class="block mt-2 text-sm text-gray-100 hover:underline">Companie</a>
                        <a href="community" class="block mt-2 text-sm text-gray-100 hover:underline">communauté</a>
                        <a href="career" class="block mt-2 text-sm text-gray-100 hover:underline">Carriére</a>
                    </div>

                    <div>
                        <h3 class="text-gray-100 uppercase ">Infos</h3>
                        <a href="faq" class="block mt-2 text-sm text-gray-100 hover:underline">FAQ</a>
                        <a href="cgu" class="block mt-2 text-sm text-gray-100 hover:underline">CGU</a>
                        <a href="cgv" class="block mt-2 text-sm text-gray-100 hover:underline">CGV</a>
                    </div>

                    <div>
                        <h3 class="text-gray-100 uppercase ">Partenaires</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-100 hover:underline">Megaloud</a>
                        <a href="#" class="block mt-2 text-sm text-gray-100 hover:underline">Aperion</a>
                        <a href="#" class="block mt-2 text-sm text-gray-100 hover:underline">Meraki</a>
                    </div>

                    <div>
                        <h3 class="text-gray-100 uppercase ">Contact</h3>
                        <a href="blog" class="block mt-2 text-sm text-gray-100 hover:underline">Blog</a>
                        <span class="block mt-2 text-sm text-gray-100 hover:underline">{{ $phone }}</span>
                        <span class="block mt-2 text-sm text-gray-100 hover:underline">{{ $mail }}</span>
                    </div>
                </div>
            </div>

            <hr class="h-px my-6 bg-gray-200 border-none ">
        </div>
        <div class="bg-gray-900">
            <p class="py-2 pb-2 text-center text-gray-300">© Mapiole 2022 - All rights reserved</p>
        </div>
    </div>

    <style>
        .footergrad {
            background: rgb(34, 75, 176);
            background: linear-gradient(270deg, rgba(34, 75, 176, 1) 0%, rgba(5, 29, 91, 1) 51%, rgba(3, 23, 79, 1) 100%);
        }
    </style>
    <script>
        $('a').on("click", function() {
            $(window).scrollTop(0);
        })

        window.addEventListener("DOMContentLoaded", (event) => {
            $(window).scrollTop(0);
        });
          
 
    </script>
