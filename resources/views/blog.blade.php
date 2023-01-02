    @php use \App\Http\Controllers\GlobalController; @endphp
    @php  $blog0 = GlobalController::blog() ;@endphp
    @php  $blogs = GlobalController::blogs() ;@endphp
    @extends('layouts.app')

    @section('main')
        <div data-barba="container">
            <section class="relative mx-auto space-y-16">
                <div id="dvImage" class="w-full h-[20rem] shadow-xl bg-cover  no-repeat center center fixed)"
                    style="background-image: url('./img/banner.jpeg');">
                    <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40  pt-12">
                        <h1 class="text-4xl font-bold text-white">blog</h1>
                    </div>
                </div>
            </section>


            <section>
                <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
                    <a rel="noopener noreferrer" href="#"
                        class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-gray-200 rounded-lg">
                          @php $image =  $blog0[0]->image[0] ?? null; @endphp
                        <img  src="{{ asset('storage/' . $image ) }}" onerror="this.src='/img/empty.png'" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 bg-gray-500">
                        <div class="p-6 space-y-2 lg:col-span-5">
                            <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">{{ $blog0[0]->titre }}</h3>
                            {{-- <span class="text-xs dark:text-gray-400">February 19, 2021</span> --}}
                           <p class="croppedb"> @php
                                    echo $blog0[0]->contenu;
                                @endphp</p>
                        </div>
                    </a>
                    <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($blogs as $blog)
                         @php $images =  $blog->image[0] ?? null; @endphp
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-gray-200 rounded-lg">
                                <img role="presentation" class="object-cover w-full rounded h-44 bg-gray-500"
                                   src="{{ asset('storage/' . $images ) }}" onerror="this.src='/img/empty.png'">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $blog->titre }}</h3>
                                    <p class="croppedb"> @php
                                    echo $blog->contenu;
                                @endphp</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>



        </div>
    @endsection
