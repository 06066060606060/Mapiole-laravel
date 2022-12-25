  <div class="mx-auto max-w-[1440px] xl:pt-52 lg:pt-[400px] pt-[500px] md:pt-[450px]">
    <section class="mx-4">
      <h2 class="text-4xl font-bold text-center md:text-5xl drop-shadow-xl">Trouvez <b class="text-blue-800">votre</b>  nouveau <b class="text-blue-800">chez-vous..</b></h2>
      <div class="grid gap-6 my-16 lg:grid-cols-3">
        <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

          <p class="text-2xl font-semibold">
            Calculer le prix d'achat maximal?<br> <span class="text-lg font-medium">Quel
              <b class="text-blue-900">prix d'achat</b> pouvez vous assumer.</span>
          </p>
        </div>
        <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

          <p class="text-2xl font-semibold">
            Un bien à louer vous intéresse ?<br> <span class="text-lg font-medium"><b class="text-blue-900">Céez </b>
              un dossier et prenez rendez-vous.</span>
          </p>
        </div>
        <div class="flex flex-col p-8 space-y-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">

          <p class="text-2xl font-semibold">
            Vous recherchez un professionnel!<br> <span class="text-lg font-medium"><b class="text-blue-900">Recherchez
              </b> dans notre liste de partenaires.</span>
          </p>
        </div>
      </div>
    </section>


    <section class="mx-4">
      <div class="grid gap-6 lg:grid-cols-3">
        <div class="overflow-hidden rounded lg:flex lg:col-span-3">
          <img src="./img/house2.webp" alt="" class="object-cover w-full h-auto max-h-96 drop-shadow-xl">
          <div class="p-6 space-y-6 bg-gray-100 border border-gray-200 shadow-xl lg:p-8 md:flex md:flex-col">
            <div class="flex">
              <span class="self-start px-3 py-1 text-sm text-white bg-green-800 rounded-full">Location</span>
              <span class="self-start px-3 py-1 mx-1 text-sm text-white bg-purple-800 rounded-full">Vente</span>
            </div>
            <h2 class="text-3xl font-bold md:flex-1 drop-shadow-xl">Choisissez parmi une large selection de biens immobiliers</h2>

          </div>
        </div>

        <div class="p-6 bg-gray-100 border border-gray-200 rounded shadow-md lg:p-8 lg:py-12">

          <p class="inline text-lg">Découvrez notre sélection de maisons et terrains disponibles en location et vente
            dans les
            meilleures localisations.</p>
        </div>
        <div class="p-6 bg-gray-100 border border-gray-200 rounded shadow-md lg:p-8 lg:py-12">

          <p class="inline text-lg">Nous avons une large gamme de maisons à louer avec option d'achat, pour répondre à
            tous
            les budgets et toutes les envies.</p>
        </div>
        <div class="p-6 bg-gray-100 border border-gray-200 rounded shadow-md lg:p-8 lg:py-12">

          <p class="inline text-lg">N'hésitez pas à nous contacter pour plus d'informations sur nos offres. Nous serons
            ravis
            de vous aider à concrétiser votre projet.</p>
        </div>
      </div>
    </section>

    <div class="flex flex-col md:flex-row justify-center -m-4 pb-4 mt-4 mx-auto max-w-[1440px]">
      <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 0,
      
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 0,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
          },
        })" class="relative w-[97%] mx-auto flex flex-row">
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
          <button @click="swiper.slidePrev()"
            class="flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow lg:-ml-4 focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-left">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <div class="swiper-container" x-ref="container">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="p-4 swiper-slide mySwiper">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/01.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="p-4 swiper-slide">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/02.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="p-4 swiper-slide">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/03.jpg " alt="">
                </div>
              </div>
            </div>

            <div class="p-4 swiper-slide">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/04.jpeg " alt="">
                </div>
              </div>
            </div>

            <div class="p-4 swiper-slide">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/06.jpeg " alt="">
                </div>
              </div>
            </div>

            <div class="p-4 swiper-slide">
              <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                  <img class="object-cover w-full h-48" src="./img/07.jpeg " alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
          <button @click="swiper.slideNext()"
            class="flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow lg:-mr-4 focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-right">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>


    <section class="grid gap-6 pt-8 mx-4 lg:grid-cols-2 mybody">
 
      <img src="./img/house1.jpeg" alt="" class="object-cover w-full border border-gray-200 shadow-md max-h-96">

      <div
        class="flex flex-col items-center w-full p-6 space-y-8 bg-gray-100 border border-gray-200 rounded-md shadow-md lg:h-full lg:p-8">
        <img src="./img/house2.webp" alt="" class="object-cover w-20 h-20 rounded-full ">
        <blockquote class="max-w-lg text-lg italic font-medium text-center">Nous travaillons uniquement en partenariat
          avec les meilleurs agents</blockquote>
        <div class="text-center ">
          <p>Leroy Jenkins</p>
          <p>CEO of Company Co.</p>
        </div>
      </div>


      <p class="py-12 mx-auto text-4xl font-bold text-center lg:col-span-full md:text-5xl drop-shadow-xl">Vous souhaitez <b
          class="text-blue-800">vendre</b> ou
        <b class="text-blue-800">louez</b> votre bien.
      </p>

      <div class="p-8 mb-8 space-y-8 bg-gray-100 border border-gray-200 rounded-md shadow-md lg:col-span-full lg:py-12">
        <h2 class="text-4xl font-bold drop-shadow-xl">Nous somme la <b class="text-blue-800">plate-forme immobilière</b> qui vous
          accompagne.</h2>
        <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt facilis quod accusantium
          beatae cum nam adipisci reiciendis omnis possimus error quo animi voluptas magni, at incidunt. Nulla ex at
          ullam corporis quidem adipisci vitae, perferendis dolorem libero minus atque tenetur enim pariatur
          cupiditate commodi in beatae, ipsa eligendi? Quis, saepe.</p>
      </div>
    </section>

    <section class="mx-4 mb-4 bg-gray-100 border border-gray-200 rounded-md shadow-xl">
      <div class="container flex flex-col p-6 mx-auto">
        <h2 class="py-4 text-3xl font-bold text-center">Comment ça marche ?</h2>
        <div class="divide-y divide-gray-300">
          <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
            <div class="flex items-center justify-center lg:col-span-1 col-span-full">
              <i class="fa-solid fa-pen-to-square fa-4x"></i>
            </div>
            <div class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">

              <span class="text-xl font-bold md:text-2xl">Décrivez l'objet</span>
              <span class="mt-4 text-gray-700">Vous saisissez les principales informations sur le bien et vous
                téléchargez les images..</span>
            </div>
          </div>
          <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
            <div class="flex items-center justify-center lg:col-span-1 col-span-full">
              <i class="fa-solid fa-list fa-4x"></i>
            </div>
            <div class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">
              <span class="text-xl font-bold md:text-2xl">Choisissez les prestations</span>
              <span class="mt-4 text-gray-700">Vous définissez la durée de parution de l'annonce et les extras
                désirés..</span>
            </div>
          </div>
          <div class="grid justify-center grid-cols-4 p-8 mx-auto space-y-8 lg:space-y-0">
            <div class="flex items-center justify-center lg:col-span-1 col-span-full">
              <i class="fa-solid fa-print fa-4x"></i>
            </div>
            <div class="flex flex-col justify-center max-w-3xl text-center col-span-full lg:col-span-3 lg:text-left">

              <span class="text-xl font-bold md:text-2xl">Publiez l'annonce</span>
              <span class="mt-4 text-gray-700">Vous choisissez la méthode de paiement et nous publions votre
                annonce..</span>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center pt-4">
            <a href="./login.html"
              class="px-4 py-2 font-bold text-white transition duration-200 bg-blue-900 rounded hover:bg-blue-600 hover:scale-105 active:scale-100">Enregistrer-vous</a>
          </div>
        </div>
      </div>
    </section>





    <section class="pt-2 mx-4">
      <div class="p-6 pt-10 pb-20 mx-auto mt-4 mb-8 bg-gray-100 border border-gray-200 rounded shadow-md lg:px-8">
        <h2 class="text-3xl font-bold text-center md:text-4xl">Trouvez votre bien et comparez les offres.</h2>
        
        <img src="./img/house3.jpeg" alt="" class="object-cover w-full h-auto mt-8 max-h-96 ">
      </div>
    </section>

  </div>


  <style>
    #dvImage{
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

  </style>