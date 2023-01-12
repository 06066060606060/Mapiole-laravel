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
                             <strong
                                 class="rounded-full  bg-purple-800 px-3 py-0.5 text-xs font-medium tracking-wide text-white">
                                 Vente
                             </strong>

                             <div class="flex justify-between mt-8">
                                 <div class="max-w-[35ch]">
                                     <p class="mt-0.5 text-xl font-bold text-blue-500 uppercase">{{ $ventes->type }}</p>
                                     <h1 class="text-2xl font-bold">
                                         {{ $ventes->name }}
                                     </h1>
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
                                                     class="inline-flex items-center justify-center px-2 h-8 text-xs font-medium text-white bg-black border rounded-full group">
                                                     {{ $ventes->surface }} m2
                                                 </span>
                                             </label>

                                         </div>
                                     </div>
                                 </fieldset>

                                 <div class="flex mt-8">
                                     <button type="submit"
                                         class="block px-5 py-3 ml-3 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-500">
                                         Contacter
                                     </button>
                                 </div>
                             </form>
                         </div>
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
