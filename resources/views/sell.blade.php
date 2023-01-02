 @extends('layouts.app')

 @section('main')
       <div data-barba="container">
         <section class="relative mx-auto space-y-16">
             <div class="w-full bg-center bg-cover h-[16rem] shadow-xl" style="background-image: url('./img/banner.jpeg');">
                 <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                 </div>
             </div>
         </section>

<h1 class="text-4xl text-center font-bold text-black pt-6">Vendez votre bien</h1>
     </div>

     <script>
         $(".hover").mouseleave(
             function() {
                 $(this).removeClass("hover");
             }
         );
     </script>
 @endsection
