 <section id="header" class="relative mx-auto space-y-16">
     <div id="dvImage" class="w-full h-[42rem] shadow-xl bg-cover  no-repeat center center"
         style="background-image: url('{{ asset('img/banner.jpeg') }}');">
         <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
             <img src="{{ asset('img/logo2.png') }}" class="h-32 w-auto mr-3 " alt=" Logo" />
             <p class="max-w-lg pt-2 mx-4 text-white">
             <p class="mx-4 text-xl font-medium text-center text-white lg:text-2xl drop-shadow-xl">Le meilleur choix
                 pour vendre ou acheter<br> une maison, un appartement
                 ou un terrain.</p>
             </p>
             <label for="Toggle3"
                 class="flex flex-col items-center p-2 mt-4 text-white rounded-md cursor-pointer md:flex-row">
                 <input id="Toggle3" type="checkbox" class="hidden peer">
                 <a href="admin/register"
                     class="prevent px-6 py-3 m-2 font-bold transition duration-200 bg-blue-600 rounded hover:bg-blue-700 hover:scale-105 active:scale-100">Inscription</a>
                 <a href="professionnel"
                     class="px-6 py-3 m-2 font-bold transition duration-200 bg-gray-500 rounded hover:bg-blue-300 hover:text-gray-800 hover:scale-105 active:scale-100">Vous
                     étes
                     un professionnel</a>
             </label>
         </div>
     </div>

     <div class="flex justify-center mx-auto">
         <div class="absolute grid grid-cols-2  xl:grid-cols-4 gap-6 w-full max-w-[1440px] -mt-32 p-4">
             <div x-data="{ modelOpen: false }">

                 <div @click="modelOpen =!modelOpen"
                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
                     <div
                         class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
                         <i class="text-blue-600 fa-solid fa-house"></i>
                     </div>

                     <h3 class="mt-4  font-bold text-gray-800 ">
                         Louer votre bien
                     </h3>

                 </div>

                 <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                     aria-labelledby="modal-title" role="dialog" aria-modal="true">
                     <div
                         class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                         <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                             class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                         </div>

                         <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                            @include('parts.multiform')
                         </div>
                     </div>
                 </div>
             </div>




             <div x-data="{ modelOpen: false }">

                 <div @click="modelOpen =!modelOpen"
                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
                     <div
                         class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
                         <i class="text-blue-600 fa-solid fa-house"></i>
                     </div>

                     <h3 class="mt-4  font-bold text-gray-800 ">
                         Vendez votre bien
                     </h3>

                 </div>

                 <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                     aria-labelledby="modal-title" role="dialog" aria-modal="true">
                     <div
                         class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                         <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                             class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                         </div>

                         <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                               @include('parts.multiform')


                         </div>
                     </div>
                 </div>
             </div>

             <div x-data="{ modelOpen: false }">

                 <div @click="modelOpen =!modelOpen"
                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
                     <div
                         class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
                         <i class="text-blue-600 fa-solid fa-house"></i>
                     </div>

                     <h3 class="mt-4  font-bold text-gray-800 ">
                       Acheter un bien
                     </h3>

                 </div>

                 <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                     aria-labelledby="modal-title" role="dialog" aria-modal="true">
                     <div
                         class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                         <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                             class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                         </div>

                         <div x-cloak x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                                @include('parts.multiform')

                         </div>
                     </div>
                 </div>
             </div>



             <div x-data="{ modelOpen: false }">

                 <div @click="modelOpen =!modelOpen"
                     class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
                     <div
                         class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
                         <i class="text-blue-600 fa-solid fa-house"></i>
                     </div>

                     <h3 class="mt-4 font-bold text-gray-800">
                         Trouver un professionnel
                     </h3>

                 </div>

                 <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                     aria-labelledby="modal-title" role="dialog" aria-modal="true">
                     <div
                         class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                         <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                             class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                         </div>

                         <div x-cloak x-show="modelOpen"
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                             <h1 class="text-xl font-medium text-center text-gray-800"> Trouver un professionnel</h1>
                             <div class="items-center space-x-4 bloc">
                                 <div class="flex pt-6 justify-evenly">
                                    
                                     <form class="mx-3" action="" method="post">
                                       
                                     </form>
                                 </div>
                             </div>


                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
