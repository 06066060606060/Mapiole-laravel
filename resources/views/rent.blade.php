 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
      <section class="relative mx-auto space-y-16">
    <div class="w-full bg-center bg-cover h-[32rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
      <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
        <div class="flex flex-col items-center justify-center w-full h-full px-4">
          <p class="pb-4 text-5xl font-bold text-center text-white drop-shadow-xl">Trouvez votre bien immobilier</p>
          <div class="mt-4" x-data="{ tab: 'Location' }">
            <div class="flex w-full">
              <button :class="{ 'active  bg-blue-800 rounded-t-md': tab === 'Vente' }"
                class="p-3 font-bold text-white rounded-t-sm focus:outline-none focus:bg-blue-800 hover:bg-blue-500 hover:text-white"
                @click="tab = 'Vente'">
                Vente
              </button>
              <button :class="{ 'active  bg-blue-800 rounded-t-md': tab === 'Location' }"
                class="p-3 font-bold text-white rounded-t-sm focus:outline-none focus:bg-blue-800 hover:bg-blue-500 hover:text-white"
                @click="tab = 'Location'">
                Location
              </button>
            </div>

            <div class="p-3 text-blue-100 bg-blue-800 rounded-b-md rounded-tr-md">
              <div x-show="tab === 'Vente'">
                <h1 class="pb-2 text-xl text-center text-white">Rechercher un bien en Vente</h1>
                <div class="flex flex-wrap justify-center">
                  <div class="mx-1">
                    <label for="search" class="pt-2 text-white md:pt-0">Où?</label>
                    <input type="search" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                      placeholder="Localité..." />
                  </div>

<!-- search bar -->

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Quoi?</label>
                    <select name="note"
                      class="mx-1 w-[110px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Appartement</option>
                      <option value="10" class="text-center">Maison</option>
                      <option value="20" class="text-center">Bureau</option>
                      <option value="30" class="text-center">Terrain</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Prix?</label>
                    <select name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Indifférent</option>
                      <option value="10" class="text-center">50000</option>
                      <option value="20" class="text-center">30000</option>
                      <option value="30" class="text-center">20000</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Piéces?</label>
                    <select name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Indifférent</option>
                      <option value="10" class="text-center">1</option>
                      <option value="20" class="text-center">2</option>
                      <option value="30" class="text-center">3</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">&nbsp;</label>
                    <button name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-400 active:bg-blue-700 shadow-sm">
                      Rechercher
                    </button>
                  </div>

                </div>
              </div>
              <div x-cloak x-show="tab === 'Location'">
                <h1 class="pb-2 text-xl text-center text-white">Rechercher un bien en Location</h1>
                <div class="flex flex-wrap justify-center">
                  <div class="mx-1">
                    <label for="search" class="pt-2 text-white md:pt-0">Où?</label>
                    <input type="search" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                      placeholder="Rechercher..." />
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Quoi?</label>
                    <select name="note"
                      class="mx-1 w-[110px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Appartement</option>
                      <option value="10" class="text-center">Maison</option>
                      <option value="20" class="text-center">Bureau</option>
                      <option value="30" class="text-center">Terrain</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Prix?</label>
                    <select name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Indifférent</option>
                      <option value="10" class="text-center">50000</option>
                      <option value="20" class="text-center">30000</option>
                      <option value="30" class="text-center">20000</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">Piéces?</label>
                    <select name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-black bg-white rounded-lg hover:border-blue-500 shadow-sm">
                      <option value="" class="text-center">Indifférent</option>
                      <option value="10" class="text-center">1</option>
                      <option value="20" class="text-center">2</option>
                      <option value="30" class="text-center">3</option>
                      </option>
                    </select>
                  </div>

                  <div class="flex flex-col">
                    <label for="search" class="pt-2 text-white md:pt-0">&nbsp;</label>
                    <button name="note"
                      class="mx-1 w-[94px] appearance-none btnmenu p-4 text-center text-sm text-white bg-blue-500 rounded-lg hover:bg-blue-400 active:bg-blue-700 shadow-sm">
                      Rechercher
                    </button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

  <div class="mx-auto max-w-[1440px]">


    <section class="text-gray-600 body-font">
      <div class="px-4 py-12 mx-auto ">
        <div class="flex flex-wrap w-full mb-8">
          <div class="w-full pl-4 mb-4 lg:w-1/2 lg:mb-0">
            <h1 class="mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Résultats de votre recherche</h1>
            <div class="h-1 bg-blue-800 rounded w-96"></div>

          </div>
<!-- filtres -->
          <section id="filtres" class="pt-4 mx-auto md:pt-8">
            <div class="w-full px-4 rounded-lg">
              <!-- mobile menu -->
              <ul id="menu"
                class="fixed top-0 right-0 z-50 justify-center hidden px-10 py-16 bg-gray-800 md:z-0 md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

                <li class="fixed z-10 md:hidden top-4 right-6">
                  <a href="recherche" class="text-4xl text-right text-white" onclick="">×</a>
                </li>

                <li>
                  <form action="" method="get">

                    <select name="note"
                      class="mx-1 w-[188px] my-2 appearance-none btnmenu  h-[33.99px]  text-center text-sm text-black bg-gray-300 border border-transparent rounded-md hover:border-blue-500 apple">
                      <option value="" class="text-center">Vente</option>
                      <option value="" class="text-center">Location</option>
                      </option>
                    </select>

                    <select name="note"
                      class="mx-1 w-[188px] my-2 appearance-none btnmenu  h-[33.99px]  text-center text-sm text-black bg-gray-300 border border-transparent rounded-md hover:border-blue-500 apple">
                      <option value="" class="text-center">Type</option>
                      <option value="" class="text-center">Appartement</option>
                      <option value="10" class="text-center">Maison</option>
                      <option value="20" class="text-center">Bureau</option>
                      <option value="30" class="text-center">Terrain</option>
                      </option>
                    </select>

                    <select name="prix"
                      class="mx-1  w-[188px] my-2 appearance-none btnmenu h-[33.99px] text-center text-sm text-black bg-gray-300 border border-transparent rounded-md hover:border-blue-500 apple">
                      <option value="" class="text-center">Prix</option>
                      <option value="10" class="text-center">0</option>
                      <option value="20" class="text-center">0</option>
                      <option value="30" class="text-center">0</option>
                      <option value="40" class="text-center">0</option>
                    </select>

                    <select name="note"
                      class="mx-1 w-[188px] my-2 appearance-none btnmenu h-[33.99px] text-center text-sm text-black bg-gray-300 border border-transparent rounded-md hover:border-blue-500 apple">
                      <option value="" class="text-center">Piéces</option>
                      </option>
                    </select>

                    <a href="/"> <input type="button"
                        class="mx-1  w-[188px] my-2 h-[33.99px] text-sm text-center  text-gray-100 rounded-md btnmenu bg-gray-500 hover:bg-gray-400 focus:outline-none focus:bg-gray-900"
                        value="Effacer les filtres">


                    </a>
                    <button
                      class="mx-1  w-[188px] my-2 btnmenu h-[33.99px] text-sm text-center text-gray-100 transition-colors duration-200 bg-blue-500 hover:bg-blue-400 focus:outline-none focus:bg-blue-500 rounded-md">Filtrer</button>

                  </form>
                </li>
              </ul>

              <!-- This is used to open the menu on mobile devices -->
              <div class="flex items-center md:hidden">
                <button onclick="toggleMenu()"
                  class="flex items-center justify-center w-40 h-10 px-2 mt-2 ml-1 mr-2 text-xs text-gray-600 border border-gray-600 rounded-md lg:hidden focus:outline-none hover:bg-gray-900 hover:text-white">
                  Filtrer
                </button>
                <script>
                  var menu = document.getElementById('menu');
                  function toggleMenu() {
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('w-full');
                    menu.classList.toggle('h-screen');
                  }
                </script>



              </div>
            </div>
          </section>
        </div>
        <section id="resultats" class="flex flex-col">
          <div class="mb-4 bg-gray-100 rounded-lg ">
            <div class="container pb-8 mx-auto md:mx-4">
              <div class="mt-4 md:flex">
                <div class="w-full swiper mySwiper md:w-1/2">
                  <div class="swiper-wrapper">
    
                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/03.jpg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/04.jpeg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/05.jpeg" alt="">
                    </div>
                  </div>
                  <div class=" swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                </div>

                <div class="pl-8 mx-6 mt-6 lg:w-1/2 lg:mt-0">
                  <button class="px-4 py-2 mb-4 text-sm font-bold text-white bg-green-800 rounded-full">Location</button>
                  <p class="text-xl font-bold text-blue-500 uppercase">Appartement</p>
                  <a class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl">
                    3 pièces, 60 m²
                  </a>

                  <p class="max-w-xl mt-3 text-sm text-gray-800 md:text-sm">
                    Dans un emplacement central (terminus de tramway Weissenbühl), nous louons à partir du 1er mars 2023
                    ou sur rendez-vous un appartement de 4,5 pièces en mezzanine (avec ascenseur).

                    L'appartement dispose d'un balcon (face à la rue), parquet dans les chambres et sols en dalles dans
                    la
                    cuisine (avec lave-vaisselle) et dans la salle de bain / WC.

                    Le compartiment cave offre un espace de rangement supplémentaire.
                  </p>

                  <a href="annonce" class="inline-block px-4 py-2 mt-2 text-white bg-blue-800 rounded text-bold hover:bg-blue-700 active:bg-blue-800">Plus d'info</a>
                  <div class="flex">
                    <div class="flex items-center mt-6">
                      <img class="object-cover object-center w-10 h-10 rounded-full"
                        src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                        alt="">

                      <div class="mx-4">
                        <p class="text-sm text-gray-500 ">Particulier</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4 bg-gray-100 rounded-lg ">
            <div class="container pb-8 mx-auto md:mx-4">
              <div class="mt-4 md:flex">
                <div class="w-full swiper mySwiper md:w-1/2">
                  <div class="swiper-wrapper">
    
                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/01.jpg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/02.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                      <img class="object-cover w-full h-96" src="./img/06.jpeg" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
                </div>

                <div class="pl-8 mx-6 mt-6 lg:w-1/2 lg:mt-0">
                  <button class="px-4 py-2 mb-4 text-sm font-bold text-white bg-purple-800 rounded-full">Vente</button>
                  <p class="text-xl font-bold text-blue-500 uppercase">Maison</p>
                  <a class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl">
                    6 pièces, 100 m²
                  </a>

                  <p class="max-w-xl mt-3 text-sm text-gray-800 md:text-sm">
                    Dans un emplacement central (terminus de tramway Weissenbühl), nous louons à partir du 1er mars 2023
                    ou sur rendez-vous un appartement de 4,5 pièces en mezzanine (avec ascenseur).

                    L'appartement dispose d'un balcon (face à la rue), parquet dans les chambres et sols en dalles dans
                    la
                    cuisine (avec lave-vaisselle) et dans la salle de bain / WC.

                    Le compartiment cave offre un espace de rangement supplémentaire.
                  </p>

                  <a href="annonce" class="inline-block px-4 py-2 mt-2 text-white bg-blue-800 rounded text-bold hover:bg-blue-700 active:bg-blue-800">Plus d'info</a>
                  <div class="flex">
                    <div class="flex items-center mt-6">
                      <img class="object-cover object-center w-10 h-10 rounded-full"
                        src="./img/avatar.png"
                        alt="">

                      <div class="mx-4">
                        <p class="text-sm text-gray-500 ">Professionel</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
        </section>


        <div class="w-full py-4 pl-4 lg:w-1/2 lg:mb-0">
          <h1 class="mt-4 mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Egalement Disponible</h1>
          <div class="h-1 bg-blue-800 rounded w-96"></div>

        </div>

        <div class="flex flex-wrap pb-16 mt-8 -m-4">
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Atlanta-Georgia-400x284.png"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Auburn_Maine-400x284.png"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Austin-Texas-400x284.png"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/BirminghamAL-400x284.jpg"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Beverly_Hills_CA-400x284.png"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/BirminghamAL-400x284.jpg"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Bluffton_SC-400x284.png"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
          <div class="p-4 xl:w-1/4 md:w-1/2">
            <div
              class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
              <img class="object-cover object-center w-full h-40 mb-6" src="./img/Boston_MA-400x284.jpg"
                alt="content">
              <h3 class="text-xs font-bold tracking-widest text-blue-500 title-font">SUBTITLE</h3>
              <p class="pb-2 text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                hexagon disrupt edison bulbche.</p>
              <a href="annonce"
                class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 active:bg-blue-800">Plus
                d'infos</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

     </div>
                 @include('parts.footer')
 @endsection
