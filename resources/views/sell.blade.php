 @extends('layouts.app')

 @section('main')
     <div data-barba="container">
         <section class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[20rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full pt-16 bg-gray-900/40">
                     <div class="flex flex-col items-center justify-center w-full h-full px-4">
                         <p
                             class="pt-40 pb-4 text-xl font-medium text-center text-white md:pb-8 md:pt24 md:text-5xl drop-shadow-xl">
                             Vendez votre bien</p>

                     </div>
                 </div>
             </div>
         </section>

         <div class="mx-auto max-w-[1440px]">


             <section class="pt-12 text-gray-600 body-font">
                
                
                     
             </section>
         </div>

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
