 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section id="foot" class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[32rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                     <div class="flex flex-col items-center justify-center w-full h-full px-4">
     <p
                             class="pt-44 pb-4 text-xl font-medium text-center text-white md:pb-8 md:pt24 md:text-5xl drop-shadow-xl">
                           </p>
                         <div class="w-full px-5 py-3 bg-white rounded-lg shadow-lg md:w-1/2 mt-4">
                             <h1 class="text-2xl text-center font-bold text-black pb-2">Rechercher un bien en vente</h1>
                             <div class="relative">
                                 <div class="absolute flex items-center h-full ml-2">
                                     <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                                         </path>
                                     </svg>
                                 </div>

                                 <input type="text" placeholder="Recherche par ville, prix, surface..."
                                     class="w-full px-8 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                             </div>

                             <div class="flex items-center justify-between mt-4">
                                 <p class="font-medium">
                                     Filtres
                                 </p>

                                 <button
                                     class="px-4 py-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-md hover:bg-indigo-300">
                                     Reset Filtres
                                 </button>
                             </div>

                             <div>
                                 <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 xl:grid-cols-5">
                                     <select
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Type</option>
                                     <option value="for-rent">Maison</option>
                                         <option value="for-sale">Appartements</option>
                                           <option value="for-sale">Terrain</option>
                                             <option value="for-sale">Villa</option>
                                              <option value="for-sale">Bureau</option>
                                               <option value="for-sale">Esp. commercial</option>
                                     </select>

                                     <select
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Prix</option>
                                         <option value="1000">RM 1000</option>
                                         <option value="2000">RM 2000</option>
                                         <option value="3000">RM 3000</option>
                                         <option value="4000">RM 4000</option>
                                     </select>

                                     <select
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Surface</option>
                                         <option value="200">200 sq.ft</option>
                                         <option value="400">400 sq.ft</option>
                                         <option value="600">600 sq.ft</option>
                                         <option value="800 sq.ft">800</option>
                                         <option value="1000 sq.ft">1000</option>
                                         <option value="1200 sq.ft">1200</option>
                                     </select>

                                     <select
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Nb Chambres</option>
                                         <option value="1">1 bedroom</option>
                                         <option value="2">2 bedrooms</option>
                                         <option value="3">3 bedrooms</option>
                                         <option value="4">4 bedrooms</option>
                                         <option value="5">5 bedrooms</option>
                                     </select>

                                     <button
                                         class="w-full px-4 py-3 text-sm text-white transition duration-200 bg-indigo-600 border border-transparent border-gray-400 rounded-md hover:bg-indigo-600 focus:border-gray-500 active:bg-white active:text-black">
                                         Rechercher
                                     </button>

                                 </div>
                             </div>
                         </div>

                     </div>
         </section>

         <div class="mx-auto max-w-[1440px]">


             <section class="pt-12 text-gray-600 body-font">
                 <div class="px-4 py-12 mx-auto ">
                     <div class="flex flex-wrap w-full mb-8">
                         <div class="w-full pl-4 mb-4 lg:w-1/2 lg:mb-0">
                             <h1 class="mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Résultats de votre
                                 recherche</h1>
                             <div class="h-1 bg-[#6805F2] rounded w-96"></div>

                         </div>
                      
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
                                         <button
                                             class="px-4 py-2 mb-4 text-sm font-bold text-white bg-green-800 rounded-full">Location</button>
                                         <p class="text-xl font-bold text-indigo-600 uppercase">Appartement</p>
                                         <a
                                             class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl">
                                             3 pièces, 60 m²
                                         </a>

                                         <p class="max-w-xl mt-3 text-sm text-gray-800 md:text-sm">
                                             Dans un emplacement central (terminus de tramway Weissenbühl), nous louons à
                                             partir du 1er mars 2023
                                             ou sur rendez-vous un appartement de 4,5 pièces en mezzanine (avec ascenseur).

                                             L'appartement dispose d'un balcon (face à la rue), parquet dans les chambres et
                                             sols en dalles dans
                                             la
                                             cuisine (avec lave-vaisselle) et dans la salle de bain / WC.

                                             Le compartiment cave offre un espace de rangement supplémentaire.
                                         </p>

                                         <a href="annonce"
                                             class="inline-block px-4 py-2 mt-2 text-white bg-[#6805F2] rounded text-bold hover:bg-blue-700 active:bg-[#6805F2]">Plus
                                             d'info</a>
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
                                                 <img class="object-cover w-full h-96" src="./img/06.jpeg"
                                                     alt="">
                                             </div>

                                         </div>
                                         <div class="swiper-button-next"></div>
                                         <div class="swiper-button-prev"></div>
                                         <div class="swiper-pagination"></div>
                                     </div>

                                     <div class="pl-8 mx-6 mt-6 lg:w-1/2 lg:mt-0">
                                         <button
                                             class="px-4 py-2 mb-4 text-sm font-bold text-white bg-purple-800 rounded-full">Vente</button>
                                         <p class="text-xl font-bold text-indigo-600 uppercase">Maison</p>
                                         <a
                                             class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl">
                                             6 pièces, 100 m²
                                         </a>

                                         <p class="max-w-xl mt-3 text-sm text-gray-800 md:text-sm">
                                             Dans un emplacement central (terminus de tramway Weissenbühl), nous louons à
                                             partir du 1er mars 2023
                                             ou sur rendez-vous un appartement de 4,5 pièces en mezzanine (avec ascenseur).

                                             L'appartement dispose d'un balcon (face à la rue), parquet dans les chambres et
                                             sols en dalles dans
                                             la
                                             cuisine (avec lave-vaisselle) et dans la salle de bain / WC.

                                             Le compartiment cave offre un espace de rangement supplémentaire.
                                         </p>

                                         <a href="annonce"
                                             class="inline-block px-4 py-2 mt-2 text-white bg-[#6805F2] rounded text-bold hover:bg-blue-700 active:bg-[#6805F2]">Plus
                                             d'info</a>
                                         <div class="flex">
                                             <div class="flex items-center mt-6">
                                                 <img class="object-cover object-center w-10 h-10 rounded-full"
                                                     src="./img/avatar.png" alt="">

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
                         <h1 class="mt-4 mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Egalement
                             Disponible à la vente</h1>
                         <div class="h-1 bg-[#6805F2] rounded w-96"></div>

                     </div>

                     <div class="flex flex-wrap pb-16 mt-8 -m-4">
                        @forelse($ventes as $vente)
                         <div class="p-4 xl:w-1/4 md:w-1/2">
                           @php $images =  $vente->image[0] ?? null; @endphp
                             <div class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
                                 <img class="object-cover object-center w-full h-40 mb-6"
                                     src="{{ asset('storage/' . $images) }}" alt="content">
                                 <h3 class="text-xs font-bold tracking-widest text-indigo-600 title-font">{{ $vente->name }}</h3>
                                 <p class="pb-2 text-base leading-relaxed cropped">{{ $vente->description }}</p>
                                 <a href="annonce?id={{ $vente->id }}"
                                     class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-[#6805F2] rounded hover:bg-indigo-600 active:bg-[#6805F2]">Plus
                                     d'infos</a>
                             </div>
                         </div>
                        @empty
                        <div class="p-4 xl:w-1/4 md:w-1/2">
                             <div
                                 class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
                                 <img class="object-cover object-center w-full h-40 mb-6"
                                     src="./img/empty.png" alt="content">
                                 <h3 class="text-xs font-bold tracking-widest text-indigo-600 title-font">Empty</h3>
                                 <p class="pb-2 text-base leading-relaxed">Dummy text.</p>
                                 <a href="annonce"
                                     class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-[#6805F2] rounded hover:bg-indigo-600 active:bg-[#6805F2]">Plus
                                     d'infos</a>
                             </div>
                         </div>
                         @endforelse
                     </div>
                 </div>
             </section>
         </div>

     </div>
 @endsection
