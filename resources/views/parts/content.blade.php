  @php
      $lang = request()->query('lang');
  @endphp

  <div id="foot" class=" xl:pt-52 lg:pt-[400px] pt-[500px] md:pt-[450px]">

      <section class="max-w-[1440px] mx-auto px-4">
          <h2 class="text-4xl font-bold text-center md:text-5xl drop-shadow-xl">Trouvez <b
                  class="text-blue-600">votre</b> nouveau <b class="text-blue-600">chez-vous..</b></h2>
          <div class="grid gap-6 my-16 lg:grid-cols-3">
              <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

                  <p class="text-2xl font-semibold">
                      Calculer le prix d'achat maximal?<br> <span class="text-lg font-medium">Quel
                          <b class="text-blue-600">prix d'achat</b> pouvez vous assumer.</span>
                  </p>
              </div>
              <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

                  <p class="text-2xl font-semibold">
                      Un bien à louer vous intéresse ?<br> <span class="text-lg font-medium"><b
                              class="text-blue-600">Céez </b>
                          un dossier et prenez rendez-vous.</span>
                  </p>
              </div>
              <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

                  <p class="text-2xl font-semibold">
                      Vous recherchez un professionnel!<br> <span class="text-lg font-medium"><b
                              class="text-blue-600">Recherchez
                          </b> dans notre liste de partenaires.</span>
                  </p>
              </div>
          </div>
      </section>

      @if ($lang == 'en')
          ENGLISH
      @else
      @endif

      <section class="px-4 py-16 border-b">
          <div class="mx-auto max-w-[1440px]">
              <div class="block mx-4 md:mx-16">
                  <h2 class="text-3xl font-bold text-center md:text-4xl drop-shadow-xl pb-16">Choisissez parmi une large
                      gamme de bien immobilier</h2>

                  <div class="grid grid-cols-2 gap-5 lg:grid-cols-4 xl:grid-cols-5">
                      @php $i = 0; @endphp
                      @forelse ($locations as $location)
                          @php $i++; @endphp
                          @if ($i == 3 || $i == 6 || $i == 11)
                              <div
                                  class="col-span-2 transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                                  <a href="#" class="flex flex-col h-full">
                                      <img alt="Art"
                                          src="{{ asset('storage/' . $location->image[0]) }}"alt=""
                                          onerror="this.src='./img/empty.png'"
                                          class="object-cover h-full max-h-[480px]" />
                                      <div class="p-2">
                                          <h3 class="mt-4 font-bold text-gray-900 md:text-xl"> {{ $location->name }}
                                          </h3>
                                          <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                                              {{ $location->ville }}
                                          </p>
                                      </div>
                                  </a>
                              </div>
                          @else
                              <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                                  <a href="#" class="flex flex-col h-full">
                                      <img alt="Art"
                                          src="{{ asset('storage/' . $location->image[0]) }}"alt=""
                                          onerror="this.src='./img/empty.png'"
                                          class="object-cover h-full max-h-[480px]" />
                                      <div class="p-2">
                                          <h3 class="mt-4 font-bold text-gray-900 md:text-xl"> {{ $location->name }}
                                          </h3>
                                          <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                                              {{ $location->vill }}
                                          </p>
                                      </div>
                                  </a>
                              </div>
                          @endif



                      @empty
                          <div class="transition shadow-md bg-gray-50 hover:bg-gray-100 md:hover:scale-105">
                              <a href="#" class="flex flex-col h-full">
                                  <img alt="Art" src="./img/empty.png" class="object-cover h-full max-h-[480px]" />
                                  <div class="p-2">
                                      <h3 class="mt-4 font-bold text-gray-900 md:text-xl">empty</h3>
                                      <p class="max-w-sm pb-2 mt-2 text-xs text-gray-700 md:text-sm">
                                          Lorem ipsum dolor sit
                                      </p>
                                  </div>
                              </a>
                          </div>
                      @endforelse



                  </div>

                  <div class="flex flex-row items-center justify-center pt-16 mx-auto">
                      <div>
                          <span class="z-0 inline-flex justify-center space-x-4 text-white rounded-md shadow-sm">

                              <a href="{{ route('location') }}"
                                  class="flex items-center p-4 justify-center duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                                  Biens en location
                              </a>

                                  <a href="{{ route('vente') }}"
                                  class="flex items-center p-4 justify-center duration-150 bg-black rounded-md shadow-md hover:bg-gray-600 focus:shadow-outline">
                                  Biens en vente
                              </a>
                          </span>
                      </div>
                  </div>
              </div>




          </div>
      </section>



      <div>
          <div class="container p-8 mx-auto mb-12 mt-8 xl:px-0">
              <div
                  class="relative flex flex-wrap items-center justify-between w-full max-w-4xl gap-5 mx-auto overflow-hidden text-white bg-blue-600 bg-gradient-to-r from-blue-600 to-blue-800 px-7 py-7 lg:px-12 lg:py-12 lg:flex-nowrap rounded-xl">
                  <div
                      class="absolute w-24 h-24 bg-white rounded-full bg-gradient-to-b from-white to-blue-600 opacity-20 -z-1 left-3 bottom-3">
                  </div>
                  <div
                      class="absolute w-24 h-24 bg-white rounded-full bg-gradient-to-b from-white to-blue-600 opacity-20 -z-1 left-1/2 -top-10">
                  </div>
                  <div class="relative z-0 flex-grow text-center lg:text-left">
                      <h2 class="text-3xl font-medium lg:text-3xl">Vous étes un professionnel?</h2>
                      <p class="mt-2 text-white text-opacity-80 lg:text-xl">Accèder à nos outils de gestion .</p>
                  </div>
                  <div class="relative flex-shrink-0 w-full text-center lg:w-auto">
                      <a onclick="document.getElementById('primary_button').click()" target="_blank" rel="noopener"
                          class="inline-block py-3 mx-auto font-medium text-center text-blue-600 bg-white rounded-md sm:text-lg px-7 lg:px-10 lg:py-5">Inscrivez-vous</a>
                  </div>
              </div>
          </div>
      </div>

      <section class="px-4 bg-blue-100 mt-14">
          <div class="grid gap-6 py-10 mx-auto  lg:grid-cols-2 mybody max-w-[1440px]">

              <img src="./img/house1.jpeg" alt=""
                  class="object-cover w-full border border-gray-200 shadow-md max-h-96">

              <div
                  class="flex flex-col items-center w-full p-6 space-y-8 bg-gray-100 border border-gray-200 rounded-md shadow-md lg:h-full lg:p-8">
                  <img src="./img/house2.webp" alt="" class="object-cover w-20 h-20 rounded-full ">
                  <blockquote class="max-w-lg text-lg italic font-medium text-center">Nous travaillons uniquement en
                      partenariat
                      avec les meilleurs agents</blockquote>
                  <div class="text-center ">
                      <p>Leroy Jenkins</p>
                      <p>CEO of Company Co.</p>
                  </div>
              </div>
          </div>
      </section>

      <div class="grid gap-6 pt-8 mx-auto  lg:grid-cols-2 mybody max-w-[1440px] px-4">
          <p class="py-12 mx-auto text-4xl font-bold text-center lg:col-span-full md:text-5xl drop-shadow-xl">Vous
              souhaitez <b class="text-blue-600">vendre</b> ou
              <b class="text-blue-600">louez</b> votre bien.
          </p>

          <div
              class="p-8 mb-8 space-y-8 bg-gray-100 border border-gray-200 rounded-md shadow-md lg:col-span-full lg:py-12">
              <h2 class="text-4xl font-bold drop-shadow-xl">Nous somme la <b class="text-blue-600">plate-forme
                      immobilière</b> qui vous
                  accompagne.</h2>
              <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt facilis quod
                  accusantium
                  beatae cum nam adipisci reiciendis omnis possimus error quo animi voluptas magni, at incidunt. Nulla
                  ex at
                  ullam corporis quidem adipisci vitae, perferendis dolorem libero minus atque tenetur enim pariatur
                  cupiditate commodi in beatae, ipsa eligendi? Quis, saepe.</p>
          </div>
      </div>

      <section class="mt-12 mb-24 mx-auto  max-w-[1440px] ">
          <div class="mx-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl ">
              <div class="container flex flex-col p-6">
                  <h2 class="py-4 text-3xl font-bold text-center">Comment ça marche ?</h2>
                  <div class="divide-y divide-gray-300">
                      <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
                          <div class="flex items-center justify-center lg:col-span-1 col-span-full">
                              <i class="fa-solid fa-pen-to-square fa-4x"></i>
                          </div>
                          <div
                              class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">

                              <span class="text-xl font-bold md:text-2xl">Décrivez l'objet</span>
                              <span class="mt-4 text-gray-700">Vous saisissez les principales informations sur le bien
                                  et
                                  vous
                                  téléchargez les images..</span>
                          </div>
                      </div>
                      <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
                          <div class="flex items-center justify-center lg:col-span-1 col-span-full">
                              <i class="fa-solid fa-list fa-4x"></i>
                          </div>
                          <div
                              class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">
                              <span class="text-xl font-bold md:text-2xl">Choisissez les prestations</span>
                              <span class="mt-4 text-gray-700">Vous définissez la durée de parution de l'annonce et les
                                  extras
                                  désirés..</span>
                          </div>
                      </div>
                      <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
                          <div class="flex items-center justify-center lg:col-span-1 col-span-full">
                              <i class="fa-solid fa-print fa-4x"></i>
                          </div>
                          <div
                              class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">

                              <span class="text-xl font-bold md:text-2xl">Publiez l'annonce</span>
                              <span class="mt-4 text-gray-700">Vous choisissez la méthode de paiement et nous publions
                                  votre
                                  annonce..</span>
                          </div>
                      </div>
                      <div class="flex flex-col items-center justify-center pt-4">
                          <a onclick="document.getElementById('secondaryButton').click()"
                              class="px-4 py-2 font-bold text-white transition duration-200 bg-blue-600 rounded hover:bg-indigo-600 hover:scale-105 active:scale-100">Enregistrer-vous</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>


 <h2 class="text-3xl font-bold text-center md:text-4xl drop-shadow-xl pb-8">Actuellement en location</h2>

      <div class="flex flex-col md:flex-row justify-center -m-8 pb-4 mt-4 mx-auto">
          <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
              loop: true,
              slidesPerView: 1,
              spaceBetween: 0,
          
              breakpoints: {
                  640: {
                      slidesPerView: 2,
                      spaceBetween: 0,
                  },
                  768: {
                      slidesPerView: 3,
                      spaceBetween: 0,
                  },
                  1024: {
                      slidesPerView: 4,
                      spaceBetween: 0,
                  },
                  1440: {
                      slidesPerView: 5,
                      spaceBetween: 0,
                  },
              },
          })" class="relative flex flex-row w-9/12 mx-auto">
              <div class="absolute inset-y-0 left-0 z-10 flex items-center mb-4">
                  <button @click="swiper.slidePrev()"
                      class="flex items-center justify-center w-10 h-10 -ml-2 transition bg-black border rounded-full shadow lg:-ml-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                      <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-left">
                          <path fill-rule="evenodd"
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </button>
              </div>

              <div class="swiper-container" x-ref="container">
                  <div class="my-8 swiper-wrapper">


                      @forelse ($locations as $location)
                          <div class="m-3 swiper-slide">
                              <a href="">
                                  <div
                                      class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                      <div class="flex-shrink-0">
                                          <img class="h-[350px] w-full object-cover border-b"
                                              src="{{ asset('storage/' . $location->image[0]) }}"alt=""
                                              onerror="this.src='./img/empty.png'" />
                                          <h1 class="pt-4 mx-8 font-bold text-center text-black uppercase">
                                              {{ $location->name }}</h1>
                                          <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                              {{ $location->ville }}
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      @empty
                          <div class="p-4 swiper-slide">
                              <a href="">
                                  <div
                                      class="flex flex-col overflow-hidden transition border shadow-lg md:hover:scale-110">
                                      <div class="flex-shrink-0">
                                          <img class="h-[450px] w-full object-cover border-b"
                                              src="./img/M_DOUBLE-DUTCH_Stadstuin-1-1-scaled.jpg" alt="">
                                          <h1 class="pt-4 mx-8 font-bold text-center text-black">Empty</h1>
                                          <p class="pb-4 mx-8 text-xs text-center text-gray-700">
                                              dummy
                                          </p>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      @endforelse






                  </div>
              </div>

              <div class="absolute inset-y-0 right-0 z-10 flex items-center mb-4">
                  <button @click="swiper.slideNext()"
                      class="flex items-center justify-center w-10 h-10 -mr-2 transition bg-black border rounded-full shadow lg:-mr-4 focus:outline-none hover:bg-gray-800 active:bg-black border-opacity-20">
                      <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6 chevron-right">
                          <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </button>
              </div>
          </div>

          </section>
          <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
      </div>

  </div>


  <style>
      .loopgrid::nth-child(3) {
          column-span: 2;
      }




      #dvImage {
          background-blend-mode: darken;
          transition: 2s;
      }

      .photo {
          animation: pic 20s linear infinite;
          position: absolute;
          opacity: 0;
      }

      @keyframes pic {
          5% {
              opacity: 1;
              /* 0 - 1秒 淡入*/
          }

          20% {
              opacity: 1;
              /* 1- 4秒靜止*/
          }

          25% {
              opacity: 0;
              /* 5-6秒淡出*/
          }
      }

      .photo:nth-child(1) {
          animation-delay: 0s;
      }

      .photo:nth-child(2) {
          animation-delay: 4s;
      }

      .photo:nth-child(3) {
          animation-delay: 8s;
      }

      .photo:nth-child(4) {
          animation-delay: 12s;
      }

      .photo:nth-child(5) {
          animation-delay: 16s;
      }

      .container:hover .photo {
          animation-play-state: paused;
      }

      .container:hover .text {
          transform: scaleY(1);
      }


      .fgrad {
          background: rgb(34, 75, 176);
          background: linear-gradient(270deg, rgba(34, 75, 176, 1) 0%, rgba(5, 29, 91, 1) 51%, rgba(3, 23, 79, 1) 100%);
      }

      .fgrad2 {
          background: rgb(116, 19, 234);
          background: linear-gradient(353deg, rgba(116, 19, 234, 1) 0%, rgba(163, 77, 210, 1) 0%, rgba(255, 190, 162, 1) 69%);
      }
  </style>
