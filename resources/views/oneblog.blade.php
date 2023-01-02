@extends('layouts.app')

@section('main')
    <div data-barba="container">
        <section class="relative mx-auto space-y-16">
            <div id="dvImage" class="w-full h-[10rem] shadow-xl bg-cover  no-repeat center center fixed)"
                style="background-image: url('./img/banner.jpeg');">
                <div class="flex flex-col items-center justify-center w-full h-full pt-12 bg-gray-900/40">
                </div>
            </div>
        </section>

        <div class="pt-8 pb-16 md:pt-20 lg:pb-24 bg-white">
            <div class="flex justify-between mx-auto max-w-[1440px] px-4 lg:px-16">
                <article class="mx-auto w-full format format-sm sm:format-base lg:format-lg format-blue">
                    <header class="mb-4 lg:mb-6 not-format">

                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-5xl text-center"> {{ $blogo[0]->titre }}</h1>
                    </header>
                    <p class="leading-relaxed py-8 mx-8"> 
                    @php
                        echo $blogo[0]->contenu;
                    @endphp
                    </p>
                    @php $images =  $blogo[0]->image[0] ?? null; @endphp
                    <figure>
                    <img src="{{ asset('storage/' . $images) }}" onerror="this.src='/img/empty.png'" alt="" class="w-[80%] mx-auto py-16">
                    </figure>
                </article>
            </div>
        </div>

    </div>

@endsection
