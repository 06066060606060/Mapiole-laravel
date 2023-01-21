 <section id="header" class="relative mx-auto space-y-16">
    <div id="dvImage" class="w-full h-[42rem] shadow-xl bg-cover  no-repeat center center" style="background-image: url('{{asset('img/banner.jpeg')}}');">
      <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
        <h2 class="mx-4 text-4xl font-bold text-white xl:text-5xl drop-shadow-xl">Inscrivez vous.</h2>
      
        <p class="mx-4 text-4xl font-medium text-center text-white lg:text-2xl drop-shadow-xl">refonte du design en cours</p>

        <label for="Toggle3"
          class="flex flex-col items-center p-2 mt-4 text-white rounded-md cursor-pointer md:flex-row">
          <input id="Toggle3" type="checkbox" class="hidden peer">
          <a  href="admin/register"
            class="prevent px-6 py-3 m-2 font-bold transition duration-200 bg-[#6805F2] rounded hover:bg-indigo-600 hover:scale-105 active:scale-100">Inscription</a>
          <a href="professionnel"
            class="px-6 py-3 m-2 font-bold transition duration-200 bg-gray-500 rounded hover:bg-indigo-300 hover:text-gray-800 hover:scale-105 active:scale-100">Vous étes
            un professionnel</a>
        </label>
      </div>
    </div>

    <div class="flex justify-center mx-auto">
      <div class="absolute grid grid-cols-2  xl:grid-cols-4 gap-6 w-full max-w-[1440px] -mt-32 p-4">

        <div
          class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
          <div
            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">

            <i class="text-[#6805F2] fa-solid fa-building-columns"></i>
          </div>

          <h3 class="mt-4 text-xl font-bold text-gray-800 md:text-xl">
            Acheter une maison
          </h3>
          <p class="mt-4 text-base text-gray-600 md:text-lg">
            Your feature description summary here.
          </p>
        </div>

        <div
          class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
          <div
            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
            <i class="text-[#6805F2] fa-solid fa-sign-hanging"></i>
          </div>

          <h3 class="mt-4 text-xl font-bold text-gray-800 md:text-xl">
            Vendre une maison
          </h3>
          <p class="mt-4 text-base text-gray-600 md:text-lg">
            Your feature description summary here.
          </p>
        </div>

        <div
          class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
          <div
            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow">
            <i class="text-[#6805F2] fa-solid fa-house"></i>
          </div>

          <h3 class="mt-4 text-xl font-bold text-gray-800 md:text-xl">
            Louer une maison
          </h3>
          <p class="mt-4 text-base text-gray-600 md:text-lg">
            Your feature description summary here.
          </p>
        </div>

        <div
          class="p-6 transition duration-200 bg-gray-100 border border-gray-200 shadow-xl md:p-10 rounded-xl hover:scale-105">
          <div
            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold bg-gray-200 rounded-full shadow ">
            <i class="text-[#6805F2] fa-solid fa-person"></i>
          </div>

          <h3 class="mt-4 text-xl font-bold text-gray-800 md:text-xl">
            Trouver un professionnel
          </h3>
          <p class="mt-4 text-base text-gray-600 md:text-lg">
            Your feature description summary here.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- fin header -->
  <script>

    $('#header').on("click", function() {
            $('#mega-menu-full-dropdown5, #mega-menu-full-dropdown4, #mega-menu-full-dropdown3, #mega-menu-full-dropdown2, #mega-menu-full-dropdown1, #mega-menu-full-dropdown').addClass('hidden');
        })

   </script>