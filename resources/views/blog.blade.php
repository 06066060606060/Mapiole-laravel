    @php use \App\Http\Controllers\GlobalController; @endphp
    @php  $blogs = GlobalController::blogs();@endphp

    @extends('layouts.app')

    @section('main')
        <div data-barba="container">
            <section class="relative mx-auto space-y-16">
                <div id="dvImage" class="w-full h-[32rem] shadow-xl bg-cover  no-repeat center center fixed)"
                    style="background-image: url('./img/banner.jpeg');">
                    <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40">
                        <h1 class="text-4xl font-bold text-white">blog</h1>
                    </div>
                </div>
            </section>

            @foreach ($blogs as $blog)
                <div class="p-5 text-gray-100 pt-12 mt-8 max-w-[1440px] mx-auto">
                    <div class="flex flex-col rounded">
                        {{-- <img src="storage/{{ $blog->image }}" alt="" class="object-cover w-auto bg-cover h-96"> --}}
                        <div class="p-6 pb-12 m-4 -mt-16 space-y-6 bg-gray-900 rounded-md">
                            <div class="space-y-2">
                                <h1 class="inline-block text-3xl font-semibold lg:text-4xl">{{ $blog->titre }}</h1>
                                <p class="text-xs text-gray-400">By
                                    <a rel="noopener noreferrer" class="text-xs hover:underline">Admin</a>
                                </p>
                            </div>
                            <div class="text-white ">
                                @php
                                    echo $blog->contenu;
                                @endphp
                            </div>
                            <div class="flex justify-end w-full">
                                {{-- {{ $blog->created_at->diffForHumans() }} --}}
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endsection
