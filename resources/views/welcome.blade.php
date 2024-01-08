<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.cdn')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospitel</title>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>


<body class="antialiased">
    {{-- <div class="w-8">
        <img src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/1084/InfyHMS-80.png" alt="">
    </div> --}}
    @include('layouts.header')

    <section id="home">
        <div>
            <img src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/903/Home-HMS.png" alt="herosection"
                class="w-[35%] h-1/4 ml-[1100px] mt-28">
        </div>
        <div>
            <h1 class="text-5xl font-bold mt-[-300px] ml-80 text-orange-500">Make Health<br>Care Better Together</h1>
            <h1 class=" ml-80 mt-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia,<br> laborum ea? In
                nisi, itaque quae voluptatum assumenda repellendus<br> aspernatur error mollitia, quod eveniet totam
                iure dolorem ipsa molestias saepe<br> aspernatur error mollitia, quod eveniet totam<br> iure dolorem
                ipsa molestias saepe fuga.</h1>
        </div>
        <div>
            <a href="#appointment"> <button
                    class="btn-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline bg-orange-500 text-white px-4 py-2 mx-0 outline-none focus:shadow-outline hover:bg-orange-600  font-normal mt-12 ml-96 rounded-l-lg hover:shadow-lg">Appoinment</button></a>

            <button
                class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-orange-500 hover:bg-orange-600 text-black hover:text-white font-normal py-2 px-4 rounded-r-lg hover:shadow-lg">Show
                Blog</button>
        </div>
    </section>
    {{-- teem section --}}
    <div id="Meet our Doctor" class="mt-48">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight text-orange-500 sm:text-4xl">Meet our Doctor</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">A medical team, also known as a clinical care team,
                        is a group of health professionals that work together to better serve their patients. A medical
                        team .</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d1.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr kanani
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">Opretion & emergensi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d2.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">kanika
                                    mishara</h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">Obstetrics and gynaecology
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d3.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr joi</h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">Radiology</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d4.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr k.v sharma
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">Urology</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d5.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr krupa</h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">Pediatrics</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="h-16 w-16 rounded-full" src="/Doctor_img/d6.jpeg" alt="">
                            <div>
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dr kunal</h3>
                                <p class="text-sm font-semibold leading-6 text-orange-500">phisayotherpi</p>
                            </div>
                        </div>
                    </li>
                    <!-- More people... -->
                </ul>
            </div>
        </div>
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
    <div class="flex justify-around mt-24 gap-[-8] m-40">
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
                <p class="text-gray-700 text-base"> image Cardiology Proin gravida nibh vel velit auctor aliquet.
                    Aenean
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

    <div>
        <div id="Servies" class="mx-auto max-w-2xl lg:text-center mt-48">
            <h2 class="text-base font-semibold leading-7 text-orange-600">Over servies </h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-5">Hospitel Manegmeint system
            </p>
        </div>
        <div id="default-carousel" class="relative w-4/5 ml-56 " data-carousel="slide" >
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 bg-slate-500">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/Doctor_img/d8.avif"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/Doctor_img/d9.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/Doctor_img/d10.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/Doctor_img/d11.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/Doctor_img/d12.avif"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div>
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="text-base font-semibold leading-7 text-orange-600">Deploy faster</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need
                            to deploy your app</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit
                            eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In
                            mi viverra elit nunc.</p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                        <dl
                            class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                        </svg>
                                    </div>
                                    Online servies
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Morbi viverra dui mi arcu sed.
                                    Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    SSL certificates
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Sit quis amet rutrum tellus
                                    ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus
                                    amet.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                    </div>
                                    Advanced Machinery
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Quisque est vel vulputate cursus.
                                    Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                        </svg>
                                    </div>
                                    Advanced security
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Arcu egestas dolor vel iaculis in
                                    ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra
                                    eget.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-around my-24">
            <div class="mt-48">
                <h2 class="text-6xl text-orange-500 font-bold ">Contact</h2>
            </div>
            <img src="https://hms-staging.infyom.com/web_front/images/page-banner/Contact.png" alt="" class="w-[35%]">
        </div>
        <div class="flex justify-around my-64 ml-48 mr-64">

            <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl">
                <img class="w-12 ml-36 " src="image\c1.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">+91 78749 79227</div>
                    <p class="text-gray-700 text-base text-center">
                        Call Today
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl">
                <img class="w-12 ml-36 " src="image\c2.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">cityhospital@gmail.com
                    </div>
                    <p class="text-gray-700 text-base text-center">
                        Contact Hospital
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl">
                <img class="w-12 ml-36 " src="image\c3.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">00:00 to 23:45

                    </div>
                    <p class="text-gray-700 text-base text-center">
                        Open Hours
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl">
                <img class="w-12 ml-36 " src="image\c4.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">304, Atlanta building, near Sudama chowk, Mota Varachha
                    </div>
                    <p class="text-gray-700 text-base text-center">
                        Our Location
                    </p>
                </div>
            </div>

        </div>

        <div class="flex justify-around my-24">
            <div class="mt-48">
                <h2 class="text-6xl text-orange-500 font-bold ">About Us</h2>
            </div>
            <img src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/1009/About-HMS.png" alt=""
                class="w-[35%]">
        </div>
        {{-- <div>
          <div>
               <div class="bg-green-200 p-9 w-80 h-48 ml-72 mt-32 rounded-2xl ">
                   <h1 class="text-3xl text-green-500 font-bold text-center mt-4">103</h1>
                   <p class="mt-4 font-bold text-xl text-center">Patients Beds</p>
               </div>
               <div class="bg-red-200 p-9 w-60 h-32 rounded-xl ml-[620px] mb-48">
                   <h1 class="text-3xl text-red-500 font-bold  text-center">59</h1>
                   <p class="font-bold text-lg ">Doctors & Nurses</p>
               </div>
          </div>
       </div> --}}

        <div>
            <div class="mt-9">
                <h1 class="text-center text-orange-500 font-bold text-3xl ">About For HMS &&</h1>
                <p class="pl-80 pr-80 mt-10 text-xl">HMS will teach physicians and nurses from around the world the
                    principles of blood management, as well as how to manage their own blood conservation programs. The
                    hospital was chosen based on the reputation its bloodless program has established in the medical
                    community and because of its nationally recognized results. We are a group of creative nerds making
                    awesome stuff for Web and Mobile. We just love to contribute to open source technologies. We always try
                    to build something which helps developers to save their time. so they can spend a bit more time with
                    their friends And family. ^&&&

                </p>
            </div>

            <div class="ml-[850px] mb-10">
                <a href="#"
                    class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-orange-500 hover:bg-orange-500 text-orange-500 hover:text-white font-normal py-2 px-4 rounded-r-lg rounded-l-lg hover:shadow-lg">Book
                    Appointment</a>
            </div>
        </div>

        {{-- -------------------------------------------------------------------blog---------------------------------------------- --}}

        {{-- -------------------------------------------ifrem---------------------------------------------------- --}}
        <div class="">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14875.656322550647!2d72.8584513!3d21.2352554!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f30b7912685%3A0x96e904c8eb74102e!2sOctal%20Infotech!5e0!3m2!1sen!2sin!4v1699268925368!5m2!1sen!2sin"
                width="1900" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        {{-- ------------------------------------------------end ifrem------------------------------------------------- --}

        {{-- --------------------------------------------------footer---------------------------------------------------- --}}

        @include('layouts.footer')

        {{-- ---------------------------------------------------end footer------------------------------------------------- --}}



</body>

</html>
