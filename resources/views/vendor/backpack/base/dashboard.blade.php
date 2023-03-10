@extends(backpack_view('blank'))
@section('content')
    <section class="text-gray-600 body-font">
        <div id="main-content" class="relative w-full h-full mt-2 overflow-y-auto bg-white border rounded-lg shadow-xl">
            <div class="flex flex-col w-full">
                <h3 class="m-4 text-xl font-bold text-gray-900">Bienvenue</h3>

                  <div class="flex w-full px-3">
                    <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                        <h1 class="text-base font-bold text-gray-900">Statistique:</h1>
                    </div>

                     <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                      <h1 class="text-base font-bold text-gray-900">Locations:</h1>
                    </div>

                    <div class="w-1/3 h-32 p-3 m-2 bg-white border shadow">
                      <h1 class="text-base font-bold text-gray-900">Ventes:</h1>
                    
                    </div>
                        </div>
                    <div class="flex md:mx-4">
                        <div id="map" class="mx-2 my-4 rounded h-[550px] w-screen">
                        </div>
                    </div>
            
            </div>

    </section>
    <style>
        * {
            scrollbar-width: thin;
            scrollbar-color: #86878B #05070C;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 15px;
        }

        *::-webkit-scrollbar-track {
            margin-top: 5px;
            margin-bottom: 5px;
            background: #05070C;
            border-radius: 5px;
        }

        *::-webkit-scrollbar-thumb {
            margin-top: 5px;
            background-color: #86878B;
            border-radius: 14px;
            border: 3px solid #05070C;
        }

        body {}
    </style>
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        let mymap = L.map('map').setView([4.843, 11.92], 7);
        osmLayer = L.tileLayer(
            'https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {
                maxZoom: 19,
                apikey: 'choisirgeoportail',
                format: 'image/jpeg',
                style: 'normal'
            }).addTo(mymap);
        mymap.addLayer(osmLayer);
        L.marker([5.04640922, 11.9904689]).addTo(mymap);
        mymap.touchZoom.enable();
    
    </script>
@endsection
