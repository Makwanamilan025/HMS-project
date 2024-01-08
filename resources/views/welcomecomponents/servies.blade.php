<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.cdn')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servies</title>
</head>

<body>
    @include('layouts.header')
    <div class="flex justify-around my-24">
        <div class="mt-48">
            <h2 class="text-6xl text-orange-500 font-bold ">Services</h2>
        </div>
        <img src="/image/a2.png" alt="" class="w-[35%]">
    </div>
    <div>
        <div>
            <h4 class="ml-[830px] text-orange-500 text-2xl mb-4">Our Services</h4>
        </div>
        <div class="ml-[600px]  text-3xl font-bold">
            <h1>We Offer Different Services To Improve Your Health<h1>
        </div>
        <div class="ml-[750px]  text-3xl font-bold">
            <h1> Improve Your Health<h1>
        </div>
    </div>
    <div  class="flex justify-around mt-24 gap-[-8] m-40">
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/214/cardiology.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4 ">
                <div class="font-bold text-xl mb-2">Cardiologyt</div>
                <p class="text-gray-700 text-base">
                    image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500 ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/215/orthopedics.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"> Orthopedics</div>
                <p class="text-gray-700 text-base">image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500 ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/216/pulmonology.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Pulmonology</div>
                <p class="text-gray-700 text-base">
                    image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500 ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/217/dental-care.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Dental Care</div>
                <p class="text-gray-700 text-base">image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor.
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-around gap-[-8] m-40 "style=" margin-top:-139px">
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/224/1111.jpeg"
                alt="Sunset in the mountains">
            <div class="px-6 py-4 ">
                <div class="font-bold text-xl mb-2">Medicine</div>
                <p class="text-gray-700 text-base">
                    image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500 ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/221/neurology.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"> Neurology</div>
                <p class="text-gray-700 text-base"> image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500 ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/220/ophthalmology.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"> Ophthalmology</div>
                <p class="text-gray-700 text-base">
                    image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor.
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:bg-orange-500 hover:text-white border-x-2 border-y-2 duration-500  ">
            <img class="w-28 rounded-lg ml-36"
                src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/219/ambulance.png"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Ambulance</div>
                <p class="text-gray-700 text-base">
                    image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    bibendum auctor.
                </p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
