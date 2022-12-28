    @php use \App\Http\Controllers\GlobalController; @endphp
    @php  $pages = GlobalController::pages();@endphp
    @php $page = $pages[9]; @endphp

    @extends('layouts.app')

    @section('main')
        <div data-barba="container">
            <section class="relative mx-auto space-y-16">
                <div id="dvImage" class="w-full h-[20rem] shadow-xl bg-cover  no-repeat center center fixed)"
                    style="background-image: url('./img/banner.jpeg');">
                    <div class="flex flex-col items-center justify-center w-full h-full bg-gray-900/40 pt-12">
                        <h1 class="text-4xl font-bold text-white">{{ $page->title }}</h1>
                    </div>
                </div>
            </section>

                <div class="p-5 text-gray-100 pt-12 mt-8 max-w-[1440px] mx-auto ">
                    <div class="flex flex-col rounded">
                        {{-- <img src="storage/{{ $blog->image }}" alt="" class="object-cover w-auto bg-cover h-96"> --}}
                        <div class="p-6 pb-12 m-4 -mt-16 space-y-6 bg-gray-900 rounded-md">
                            <div class="text-white ">
                                @php
                                    echo $page->content;
                                @endphp
                            </div>
                            <div class="flex justify-end w-full">
                                {{-- {{ $blog->created_at->diffForHumans() }} --}}
                            </div>
                        </div>
                    </div>

                </div>
       
        </div>
    @endsection