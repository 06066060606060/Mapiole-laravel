 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section class="relative mx-auto space-y-16">
             <div id="dvImage" class="w-full h-[42rem] shadow-xl bg-cover  no-repeat center center fixed)"
                 style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                     <h1 class="text-3xl md:text-5xl font-bold text-white">Vendre sereinement avec Mapiole</h1>
                     <p class="md:text-xl text-gray-200 max-w-2xl mx-4 pt-2 font-bold">Un ensemble de services pour vous aider à vendre votre bien au meilleur prix et dans les meilleurs délais.<br>
Parce que vendre son appartement ou sa maison n'est pas une étape aisée, nous vous accompagnont tout au long de votre projet.</p>
                 </div>
             </div>
         </section>

     </div>
     
 @endsection
