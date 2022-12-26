@extends('layouts.app')

@section('main')
  <div data-barba="container">
    @php use \App\Http\Controllers\GlobalController; @endphp
    @php  $pages = GlobalController::pages();@endphp
 <div class="z-0 one"></div>
    <div class="min-h-screen p-5 mx-auto text-gray-100 sm:p-10 md:px-16">
        <div class="flex flex-col max-w-5xl mx-auto overflow-hidden rounded">

            <div class="text-black pt-24">
                @php
                    echo $pages[2]->content;
                @endphp
            </div>

        </div>
    </div>
      </div>
      
@endsection
