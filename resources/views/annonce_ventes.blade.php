 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section id="foot" class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[20rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full pt-16 bg-gray-900/40">

                 </div>
         </section>

         <div class="mx-auto max-w-[1440px]">

             <section>
                 <div class="relative max-w-screen-xl px-4 py-8 mx-auto my-8 bg-gray-100 rounded-lg">
                     <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
                         <div class="grid grid-cols-1 gap-4">

                             <div class="w-full swiper mySwiper">
                                 <div class="swiper-wrapper">

                                     <div class="swiper-slide">
                                         @php $image0 =  $ventes->image[0] ?? null; @endphp
                                         <img class="object-cover w-full h-96" src="./storage/{{ $image0 }}"
                                             alt="" onerror="this.src='/img/empty.png'">
                                     </div>

                                     <div class="swiper-slide">
                                         @php $image1 =  $ventes->image[1] ?? null; @endphp
                                         <img class="object-cover w-full h-96" src="./storage/{{ $image1 }}"
                                             alt="" onerror="this.src='/img/empty.png'">
                                     </div>

                                     <div class="swiper-slide">
                                         @php $image2 =  $ventes->image[2] ?? null; @endphp
                                         <img class="object-cover w-full h-96" src="./storage/{{ $image2 }}"
                                             alt="" onerror="this.src='/img/empty.png'">
                                     </div>

                                     <div class="swiper-slide">
                                         @php $image3 =  $ventes->image[3] ?? null; @endphp
                                         <img class="object-cover w-full h-96" src="./storage/{{ $image3 }}"
                                             alt="" onerror="this.src='/img/empty.png'">
                                     </div>

                                 </div>
                                 <div class=" swiper-button-next"></div>
                                 <div class="swiper-button-prev"></div>
                                 <div class="swiper-pagination"></div>
                             </div>

                             <div class="grid grid-cols-4 gap-4 lg:mt-4">
                                 <img class="object-cover w-full" src="./storage/{{ $image0 }}" alt=""
                                     onerror="this.src='/img/empty.png'">
                                 <img class="object-cover w-full" src="./storage/{{ $image1 }}" alt=""
                                     onerror="this.src='/img/empty.png'">
                                 <img class="object-cover w-full" src="./storage/{{ $image2 }}" alt=""
                                     onerror="this.src='/img/empty.png'">
                                 <img class="object-cover w-full" src="./storage/{{ $image3 }}" alt=""
                                     onerror="this.src='/img/empty.png'">
                             </div>
                         </div>

                         <div class="sticky top-0">
                             <div class="flex">
                                 <button
                                     class="inline-flex items-center justify-center w-10 h-10 p-0 mr-4 text-gray-500 bg-gray-200 border-0 rounded-full">
                                     <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                         stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                         <path
                                             d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                         </path>
                                     </svg>
                                 </button>
                                 <button
                                     class="rounded-full  bg-purple-800 px-3 py-0.5 text-xs font-medium tracking-wide text-white">
                                     Vente
                                 </button>
                             </div>

                             <div class="flex justify-between mt-8">
                                 <div class="max-w-[35ch]">
                                     <p class="mt-0.5 text-xl font-bold text-blue-500 uppercase">{{ $ventes->type }}</p>
                                     <h1 class="text-2xl font-bold">
                                         {{ $ventes->name }}
                                     </h1>
                                                           <a class="py-2 mb-4 text-sm font-bold text-gray-600">Région:<span class="text-black"> {{ $ventes->ville }}</span> </a>
                                 </div>
                                 <p class="text-lg font-bold"> {{ $ventes->prix }} €</p>
                             </div>

                             <details class="group relative mt-4 [&_summary::-webkit-details-marker]:hidden">
                                 <summary class="block">
                                     <div>
                                         <div class="prose max-w-none group-open:hidden">
                                             <p>
                                                 {{ $ventes->description }}
                                             </p>
                                         </div>

                                         <span
                                             class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                             En savoir plus
                                         </span>
                                     </div>
                                 </summary>

                                 <div class="pb-6 prose max-w-none">
                                     <p>
                                         {{ $ventes->description }}
                                     </p>

                                     <p>
                                         {{ $ventes->description2 }}
                                     </p>
                                 </div>
                             </details>

                             <form class="mt-8">
                                 <fieldset>
                                     <legend class="mb-1 text-sm font-medium">Details:</legend>

                                     <div class="flow-root">
                                         <div class="-m-0.5 flex flex-wrap">

                                             @if ($ventes->terrasse == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Terrasse
                                                     </span>
                                                 </label>
                                             @endif

                                             @if ($ventes->balcon == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Balcon
                                                     </span>
                                                 </label>
                                             @endif

                                             @if ($ventes->garage == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Garage
                                                     </span>
                                                 </label>
                                             @endif


                                             @if ($ventes->parking == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Parking
                                                     </span>
                                                 </label>
                                             @endif

                                             @if ($ventes->piscine == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Piscine
                                                     </span>
                                                 </label>
                                             @endif

                                             @if ($ventes->jardin == 1)
                                                 <label for="color_tt" class="p-0.5">
                                                     <span
                                                         class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                                                         Jardin
                                                     </span>
                                                 </label>
                                             @endif

                                         </div>
                                     </div>
                                 </fieldset>

                                 <fieldset class="mt-4">
                                     <legend class="mb-1 text-sm font-medium">Surface:</legend>

                                     <div class="flow-root">
                                         <div class="-m-0.5 flex flex-wrap">
                                             <label for="size_xs" class="p-0.5">
                                                 <span
                                                     class="inline-flex items-center justify-center h-8 px-2 text-xs font-medium text-white bg-black border rounded-full group">
                                                     {{ $ventes->surface }} m2
                                                 </span>
                                             </label>

                                         </div>
                                     </div>
                                 </fieldset>


                             </form>
                         </div>
                     </div>
                           <div class="mt-4">
                     <map class="relative text-gray-600">
                         <div class="absolute inset-0 bg-gray-300">
                             <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0"
                                 title="map" scrolling="no"
                                 src="https://maps.google.com/maps?width=100%&height=600&hl=en&q='.{{ $ventes->ville }} .'&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                                 style="filter: contrast(1.2) opacity(0.4);"></iframe>
                         </div>
                         <div class="container flex px-5 py-24 mx-auto">
                             <div
                                 class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg shadow-md lg:w-1/3 md:w-1/2 md:ml-auto md:mt-0">
                                 <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">Contacter le propriétaire
                                 </h2>

                                 <div class="relative mb-4">
                                     <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                                     <textarea id="message" name="message"
                                         class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
                                 </div>
                                 <button
                                     class="px-6 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Envoyer</button>

                             </div>
                         </div>
                     </map>
                       </div>
                 </div>
             </section>

         </div>


     </div>
     <script>
         window.addEventListener("DOMContentLoaded", (event) => {
             $(window).scrollTop(0);
         });
     </script>
 @endsection
