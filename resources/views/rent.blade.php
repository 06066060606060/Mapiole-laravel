 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section id="foot" class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[32rem] shadow-xl"
                 style="background-image: url('{{ asset('img/banner.jpeg') }}');">
                 <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                     <div class="flex flex-col items-center justify-center w-full h-full px-4">
                         <p
                             class="pb-4 text-xl font-medium text-center text-white pt-44 md:pb-8 md:pt24 md:text-5xl drop-shadow-xl">
                         </p>
                         <form class="w-full px-5 py-3 mt-4 bg-white rounded-lg shadow-lg prevent md:w-1/2"
                             action="/location-bien-immobilier-cameroun/filter" method="get">
                             <h1 class="pb-2 text-2xl font-bold text-center text-black">Rechercher un bien en location</h1>
                             <div class="relative">
                                 <div class="absolute flex items-center h-full ml-2">
                                     <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path
                                             d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                                         </path>
                                     </svg>
                                 </div>

                                 <input type="text" placeholder="Recherche par ville, prix, surface..." name="q"
                                     class="w-full px-8 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0"
                                     value="{{ request()->q ?? '' }}">
                             </div>

                             <div class="flex items-center justify-between mt-4">
                                 <p class="font-medium">
                                     Filtres
                                 </p>

                                 <a href="/location-bien-immobilier-cameroun"
                                     class="px-4 py-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-md hover:bg-indigo-300">
                                     Reset Filtres
                                 </a>
                             </div>

                             <div>
                                 <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 xl:grid-cols-5">
                                     <select name="type"
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Type</option>
                                         <option value="Maison">Maison</option>
                                         <option value="Appartement">Appartement</option>
                                         <option value="Terrain">Terrain</option>
                                         <option value="Villa">Villa</option>
                                         <option value="Bureau">Bureau</option>
                                         <option value="Commerce">Esp. commercial</option>
                                     </select>

                                     <select name="prix"
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Prix</option>
                                         <option value="19000">moins de 20000 €</option>
                                         <option value="29000">30000</option>
                                         <option value="39000">40000</option>
                                         <option value="50000">50000</option>
                                         <option value="80000">80000</option>
                                         <option value="100000">100000</option>
                                     </select>

                                     <select name="surface"
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Surface</option>
                                         <option value="50">50 m2</option>
                                         <option value="100">100 m2</option>
                                         <option value="200">200 m2</option>
                                         <option value="300">300 m2</option>
                                         <option value="400">400 m2</option>
                                         <option value="500">+ 400 m2</option>
                                     </select>

                                     <select name="nb_pieces"
                                         class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:ring-0">
                                         <option value="">Nb Piéces</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="10">10+</option>
                                     </select>

                                     <button type="submit"
                                         class="w-full px-4 py-3 text-sm text-white transition duration-200 bg-indigo-600 border border-transparent border-gray-400 rounded-md hover:bg-indigo-600 focus:border-gray-500 active:bg-white active:text-black">
                                         Rechercher
                                     </button>

                                 </div>
                             </div>
                         </form>

                     </div>
         </section>

         <div class="mx-auto max-w-[1440px]">


             <section class="pt-12 text-gray-600 body-font">
                 <div class="px-4 py-12 mx-auto ">
                     <div class="flex flex-wrap w-full mb-8">
                         <div class="w-full pl-4 mb-4 lg:w-1/2 lg:mb-0">
                             @if (request()->q || request()->type || request()->prix || request()->surface || request()->nb_pieces)
                                 <h1 class="mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Résultats de
                                     votre recherche</h1>
                             @else
                                 <h1 class="mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Dernières
                                     annonces </h1>
                             @endif

                             <div class="h-1 bg-[#6805F2] rounded w-96"></div>

                         </div>

                     </div>
                     <section id="resultats" class="flex flex-col">
                         @forelse ($lastlocations as $lastlocation)
                             <div class="mb-4 bg-gray-100 rounded-lg ">
                                 <div class="container pb-8 mx-auto md:mx-4">
                                     <div class="mt-4 md:flex">
                                         <div class="w-full swiper mySwiper md:w-1/2">
                                             <div class="swiper-wrapper">

                                                 <div class="swiper-slide">
                                                     @php $image0 =  $lastlocation->image[0] ?? null; @endphp
                                                     <img class="object-cover w-full h-96"
                                                         src="./storage/{{ $image0 }}" alt=""
                                                         onerror="this.src='/img/empty.png'">
                                                 </div>

                                                 <div class="swiper-slide">
                                                     @php $image1 =  $lastlocation->image[1] ?? null; @endphp
                                                     <img class="object-cover w-full h-96"
                                                         src="./storage/{{ $image1 }}" alt=""
                                                         onerror="this.src='/img/empty.png'">
                                                 </div>

                                                 <div class="swiper-slide">
                                                     @php $image2 =  $lastlocation->image[2] ?? null; @endphp
                                                     <img class="object-cover w-full h-96"
                                                         src="./storage/{{ $image2 }}" alt=""
                                                         onerror="this.src='/img/empty.png'">
                                                 </div>
                                             </div>
                                             <div class=" swiper-button-next"></div>
                                             <div class="swiper-button-prev"></div>
                                             <div class="swiper-pagination"></div>
                                         </div>

                                         <div class="pl-8 mx-6 mt-6 lg:w-1/2 lg:mt-0">
                                             <button
                                                 class="px-4 py-2 mb-4 text-sm font-bold text-white bg-purple-800 rounded-full">Location</button>
                                             <p class="text-xl font-bold text-indigo-600 uppercase">
                                                 {{ $lastlocation->type }}
                                             </p>
                                             <a
                                                 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl">
                                                 {{ $lastlocation->name }}
                                             </a>

                                             <p class="max-w-xl mt-3 text-sm text-gray-800 md:text-sm">
                                                 {{ $lastlocation->description }}
                                             </p>

                                             <a href="annonce"
                                                 class="inline-block px-4 py-2 mt-2 text-white bg-blue-800 rounded text-bold hover:bg-blue-700 active:bg-blue-500">Plus
                                                 d'info</a>
                                             <div class="flex">
                                                 <div class="flex items-center mt-6">
                                                     <img class="object-cover object-center w-10 h-10 rounded-full"
                                                         src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                                         alt="">

                                                     <div class="mx-4">
                                                         <p class="text-sm text-gray-500 ">user type</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @empty
                         @endforelse

                     </section>


                     <div class="w-full py-4 pl-4 lg:w-1/2 lg:mb-0">
                         <h1 class="mt-4 mb-2 text-3xl font-medium text-gray-900 md:text-4xl title-font">Disponible à la
                             location</h1>
                         <div class="h-1 bg-[#6805F2] rounded w-96"></div>

                     </div>

                     <div class="flex flex-wrap pb-16 mt-8 -m-4">
                         @forelse($locations as $location)
                             <div class="p-4 xl:w-1/4 md:w-1/2">
                                 @php $images =  $location->image[0] ?? null; @endphp
                                 <div
                                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
                                     <img class="object-cover object-center w-full h-40 mb-6"
                                         src="{{ asset('storage/' . $images) }}" alt="content">
                                     <h3 class="text-xs font-bold tracking-widest text-indigo-600 title-font">
                                         {{ $location->name }}</h3>
                                     <p class="pb-2 text-base leading-relaxed cropped">{{ $location->description }}</p>
                                     <a href="annonce?id={{ $location->id }}"
                                         class="flex justify-center px-4 py-2 mx-auto font-bold text-white transition duration-200 bg-[#6805F2] rounded hover:bg-indigo-600 active:bg-[#6805F2]">Plus
                                         d'infos</a>
                                 </div>
                             </div>
                         @empty
                             <div class="p-4 xl:w-1/4 md:w-1/2">
                                 <div
                                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 rounded-lg shadow-xl hover:border-gray-400">
                                     <img class="object-cover object-center w-full h-40 mb-6" src="./img/empty.png"
                                         alt="content">
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
         {{ $locations->appends(Request::all())->links('pagination::tailwind') }}
     </div>
     <style>


     </style>

     <script>
         $(".hover").mouseleave(
             function() {
                 $(this).removeClass("hover");
             }
         );
     </script>
 @endsection
