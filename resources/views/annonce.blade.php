 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
        <section class="relative mx-auto space-y-16">
    <div class="w-full bg-center bg-cover h-[10rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
  </section>

  <div class="mx-auto max-w-[1440px]">

    <section>
      <div class="relative max-w-screen-xl px-4 py-8 mx-auto my-8 bg-gray-100 rounded-lg">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
          <div class="grid grid-cols-1 gap-4">

            <div class="w-full swiper mySwiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <img class="object-cover w-full h-96" src="./img/01.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img class="object-cover w-full h-96" src="./img/02.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img class="object-cover w-full h-96" src="./img/03.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img class="object-cover w-full h-96" src="./img/04.jpeg" alt="">
                </div>

              </div>
              <div class=" swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="grid grid-cols-4 gap-4 lg:mt-4">
              <img alt="Les Paul" src="./img/01.jpg" class="object-cover w-full " />

              <img alt="Les Paul" src="./img/02.jpg" class="object-cover w-full " />

              <img alt="Les Paul" src="./img/03.jpg" class="object-cover w-full " />

              <img alt="Les Paul" src="./img/04.jpeg" class="object-cover " />
            </div>
          </div>

          <div class="sticky top-0">
            <strong class="rounded-full  bg-green-800 px-3 py-0.5 text-xs font-medium tracking-wide text-white">
              Location
            </strong>

            <div class="flex justify-between mt-8">
              <div class="max-w-[35ch]">
                <p class="mt-0.5 text-xl font-bold text-blue-500 uppercase">Appartement</p>
                <h1 class="text-2xl font-bold">
                  3 pièces, 60 m²
                </h1>
              </div>
              <p class="text-lg font-bold">1190.99 CHF/mois</p>
            </div>

            <details class="group relative mt-4 [&_summary::-webkit-details-marker]:hidden">
              <summary class="block">
                <div>
                  <div class="prose max-w-none group-open:hidden">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      veniam dicta beatae eos ex error culpa delectus rem tenetur,
                      architecto quam nesciunt, dolor veritatis nisi minus
                      inventore, rerum at recusandae?
                    </p>
                  </div>

                  <span
                    class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                    Read More
                  </span>
                </div>
              </summary>

              <div class="pb-6 prose max-w-none">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                  veniam dicta beatae eos ex error culpa delectus rem tenetur,
                  architecto quam nesciunt, dolor veritatis nisi minus inventore,
                  rerum at recusandae?
                </p>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                  nam sapiente nobis ea veritatis error consequatur nisi
                  exercitationem iure laudantium culpa, animi temporibus non! Maxime
                  et quisquam amet. A, deserunt!
                </p>
              </div>
            </details>

            <form class="mt-8">
              <fieldset>
                <legend class="mb-1 text-sm font-medium">Equipements:</legend>

                <div class="flow-root">
                  <div class="-m-0.5 flex flex-wrap">
                    <label for="color_tt" class="p-0.5">
                      <span class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                        Cusine équipée
                      </span>
                    </label>

                    <label for="color_tt" class="p-0.5">
                      <span class="inline-block px-3 py-1 text-xs font-medium bg-white border rounded-full group">
                        Baignoire
                      </span>
                    </label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="mt-4">
                <legend class="mb-1 text-sm font-medium">Surface</legend>

                <div class="flow-root">
                  <div class="-m-0.5 flex flex-wrap">
                    <label for="size_xs" class="p-0.5">
                      <span
                        class="inline-flex items-center justify-center w-12 h-8 text-xs font-medium text-white bg-black border rounded-full group">
                        60m3
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
 @endsection
