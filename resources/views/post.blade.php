 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section id="foot" class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[16rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                 </div>
             </div>
         </section>

         <h1 class="pt-6 text-4xl font-bold text-center text-black">Poster une nouvelle annonce</h1>
     </div>

     <section class="px-6 max-w-[1440px] mx-auto pb-64">
         <div class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
             <div class="px-6 max-w-[1440px] ">
                 <div class="pt-8 after:mt-4 after:block after:h-1 after:w-full after:rounded-lg after:bg-gray-200">
                     <ol class="grid grid-cols-3 text-sm font-medium text-gray-500">
                         <li class="relative text-left text-blue-600">
                             <span class="absolute left-0 -bottom-[1.75rem] rounded-full bg-blue-600 text-white">
                                 <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor">
                                     <path fill-rule="evenodd"
                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </span>
                             <span class="block"> Details </span>
                         </li>

                         <li class="relative text-center text-gray-600">
                             <span
                                 class="absolute left-1/2 -bottom-[1.75rem] -translate-x-1/2 rounded-full bg-gray-600 text-white">
                                 <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor">
                                     <path fill-rule="evenodd"
                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </span>
                             <span class="block"> Documents </span>
                         </li>

                         <li class="relative text-right text-gray-600">
                             <span
                                 class="absolute right -bottom-[1.75rem] -translate-x-1/2 rounded-full bg-gray-600 text-white">
                                 <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor">
                                     <path fill-rule="evenodd"
                                         d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </span>
                             <span class="block">Enregistrement</span>
                         </li>
                     </ol>
                 </div>
             </div>
             <div class="mx-4 lg:mx-16">
                 <div class="px-4 py-8 mx-auto ">
                     <form action="#">
                         <div class="flex justify-center max-w-xl mx-auto">
                             <fieldset class="grid grid-cols-2 gap-4 pb-4">
                                 <div>
                                     <input type="radio" name="DeliveryOption" value="DeliveryStandard"
                                         id="DeliveryStandard" class="hidden peer" checked />

                                     <label for="DeliveryStandard"
                                         class="block p-4 text-sm font-medium border border-gray-100 rounded-lg shadow-sm cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                         <p class="text-gray-700">Location</p>
                                     </label>
                                 </div>

                                 <div>
                                     <input type="radio" name="DeliveryOption" value="DeliveryPriority"
                                         id="DeliveryPriority" class="hidden peer" />

                                     <label for="DeliveryPriority"
                                         class="block p-4 text-sm font-medium border border-gray-100 rounded-lg shadow-sm cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                         <p class="text-center text-gray-700">Vente</p>
                                     </label>
                                 </div>
                             </fieldset>

                         </div>

                         <div class="pb-4 sm:col-span-2">
                             <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Titre:</label>
                             <input type="text" name="name" id="name"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                 placeholder="Titre de votre annonce" required="">
                         </div>

                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Type de bien:</label>
                         <fieldset class="flex flex-wrap gap-3 pb-4">

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorBlack" id="ColorBlack"
                                     class="peer hidden [&:checked_+_label_svg]:block" checked />

                                 <label for="ColorBlack"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Appartement</p>
                                 </label>
                             </div>

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorRed" id="ColorRed"
                                     class="peer hidden [&:checked_+_label_svg]:block" />

                                 <label for="ColorRed"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Maison</p>
                                 </label>
                             </div>

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorBlue" id="ColorBlue"
                                     class="peer hidden [&:checked_+_label_svg]:block" />

                                 <label for="ColorBlue"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Terrain</p>
                                 </label>
                             </div>

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorGold" id="ColorGold"
                                     class="peer hidden [&:checked_+_label_svg]:block" />

                                 <label for="ColorGold"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Villa</p>
                                 </label>
                             </div>

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorGoldz" id="ColorGoldz"
                                     class="peer hidden [&:checked_+_label_svg]:block" />

                                 <label for="ColorGoldz"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Bureau</p>
                                 </label>
                             </div>

                             <div>
                                 <input type="radio" name="ColorOption" value="ColorGoldaz" id="ColorGoldaz"
                                     class="peer hidden [&:checked_+_label_svg]:block" />

                                 <label for="ColorGoldaz"
                                     class="flex items-center justify-center gap-2 px-3 py-2 text-gray-900 border border-gray-100 rounded-md cursor-pointer hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
                                     <svg class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                             clip-rule="evenodd" />
                                     </svg>

                                     <p class="text-sm font-medium">Commerce</p>
                                 </label>
                             </div>


                         </fieldset>


                         <div class="pb-4 sm:col-span-2">
                             <label for="description"
                                 class="block mb-2 text-sm font-medium text-gray-900">Description:</label>
                             <textarea id="description" rows="8"
                                 class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                                 placeholder="description"></textarea>
                         </div>
                         <div class="grid gap-4 pb-4 sm:grid-cols-4 sm:gap-6">
                             <div class="w-full">
                                 <label for="surface" class="block mb-2 text-sm font-medium text-gray-900">Surface
                                     m2</label>
                                 <input type="number" name="surface" id="surface"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                     placeholder="70" required="">
                             </div>
                             <div class="w-full">
                                 <label for="piece" class="block mb-2 text-sm font-medium text-gray-900">Nb de
                                     piéces:</label>
                                 <input type="number" name="piece" id="piece"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                     placeholder="5" required="">
                             </div>
                             <div class="w-full">
                                 <label for="Chambres"
                                     class="block mb-2 text-sm font-medium text-gray-900">Chambres:</label>
                                 <input type="number" name="chambre" id="chambre"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                     placeholder="2" required="">
                             </div>
                             <div>
                                 <label for="bain" class="block mb-2 text-sm font-medium text-gray-900">Salle de
                                     bain:</label>
                                 <input type="number" name="bain" id="bain"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                     placeholder="1" required="">
                             </div>
                             <div class="w-full">
                                 <label for="bain"
                                     class="block mb-2 text-sm font-medium text-gray-900">Options:</label>
                                 <div class="flex flex-wrap">
                                     <div class="py-2 mx-2">
                                         <label class="relative inline-flex items-center cursor-pointer">
                                             <input type="checkbox" value="" class="sr-only peer">
                                             <div
                                                 class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                             </div>
                                             <span class="ml-3 text-sm font-medium text-gray-900 ">Terrasse:</span>
                                         </label>
                                     </div>
                                     <div class="py-2 mx-2">
                                         <label class="relative inline-flex items-center cursor-pointer">
                                             <input type="checkbox" value="" class="sr-only peer">
                                             <div
                                                 class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                             </div>
                                             <span class="ml-3 text-sm font-medium text-gray-900 ">Garage:</span>
                                         </label>
                                     </div>
                                     <div class="py-2 mx-2">
                                         <label class="relative inline-flex items-center cursor-pointer">
                                             <input type="checkbox" value="" class="sr-only peer">
                                             <div
                                                 class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                             </div>
                                             <span class="ml-3 text-sm font-medium text-gray-900 ">Parking:</span>
                                         </label>
                                     </div>
                                     <div class="py-2 mx-2">
                                         <label class="relative inline-flex items-center cursor-pointer">
                                             <input type="checkbox" value="" class="sr-only peer">
                                             <div
                                                 class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                             </div>
                                             <span class="ml-3 text-sm font-medium text-gray-900 ">Jardin:</span>
                                         </label>
                                     </div>
                                 </div>
                             </div>

                             <div>
                                 <label for="surface" class="block mb-2 text-sm font-medium text-gray-900">Loyer
                                     mensuel €</label>
                                 <input type="number" name="surface" id="surface"
                                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                     placeholder="70" required="">
                             </div>

                             <div>
                                 <label for="surface"
                                     class="block mb-2 text-sm font-medium text-gray-900">Photos:</label>
                                 <input type="file" name="surface" id="surface"
                                     class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-600 focus:border-primary-600 "
                                     placeholder="70">
                             </div>

                             <div>
                                 <label for="surface"
                                     class="block mb-2 text-sm font-medium text-gray-900">Documents:</label>
                                 <input type="file" name="surface" id="surface"
                                     class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-600 focus:border-primary-600"
                                     placeholder="70">
                             </div>
                         </div>
                 </div>

                 <div class="flex mx-4">
                     <div class="w-full pb-4">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Adresse:</label>
                         <input type="text" name="name" id="name"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                             placeholder="adresse" required="">
                     </div>
                 </div>
                 <div class="flex flex-wrap mx-4">
                     <div class="w-1/3 py-2">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ville:</label>
                         <input type="text" name="name" id="name"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                             placeholder="Ville" required="">
                     </div>
                     <div class="py-2 mx-2">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Code Postal:</label>
                         <input type="text" name="name" id="name"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                             placeholder="97410" required="">
                     </div>
                     <div class="py-2 mx-2">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Téléphone:</label>
                         <input type="text" name="name" id="name"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                             placeholder="06.06.06.06.06" required="">
                     </div>
                     <div class="py-2 mx-2">
                         <label for="name" class="block mb-2 text-sm font-medium "> &nbsp;</label>
                         <button type="submit"
                             class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-gray-700 rounded-lg">
                             Enregistrer l'annonce
                         </button>
                     </div>
                 </div>
                 <div class="mx-4">
                     <label for="name" class="block pt-8 mb-2 text-sm font-medium text-gray-900">Localisation:</label>
                     <div class="flex h-96">
                         <div id="map" class="w-full mx-2 mt-4 rounded">
                         </div>
                     </div>
                 </div>


     </section>

     <script type="module">
      let mymap = L.map('map').setView([3.8534, 11.5054], 10);
        let markers = {};
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(mymap);

        let greenIcon = L.icon({
            iconUrl: '/img/icon.bomb.png',
            iconSize: [30, 45],
            iconAnchor: [0, 0],
            popupAnchor: [1, 1]
        });
 
var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

L.on('click', mymap);

    </script>


     </form>
     </div>
     </div>
     </section>

     </div>
     </section>

     <script>
         window.addEventListener("DOMContentLoaded", (event) => {
             $(window).scrollTop(0);

         });
     </script>
 @endsection
