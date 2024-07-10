<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.cdn')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contect</title>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    @include('layouts.header')
    <div class="flex justify-around my-24">
        <div class="mt-48">
            <h2 class="text-6xl text-orange-500 font-bold ">Contact</h2>
        </div>
        <img src="https://hms-staging.infyom.com/web_front/images/page-banner/Contact.png" alt="" class="w-[35%]">
    </div>
    <div class="flex justify-around my-64 ml-48 mr-64">

        <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-20 " src="image\c1.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">+91 78749 79227</div>
                <p class="text-gray-700 text-base text-center">
                    Call Today
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-28 " src="image\c2.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">cityhospital@gmail.com
                </div>
                <p class="text-gray-700 text-base text-center">
                    Contact Hospital
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-16 " src="image\c3.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">00:00 to 23:45

                </div>
                <p class="text-gray-700 text-base text-center">
                    Open Hours
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl  hover:translate-y-3 hover:bg-slate-100">
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

    <div class="py-5 px-8 ">
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

        <div class="ml-[850px] mt-12">
            <a href="{{route('appointments.create')}}"
                class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-orange-500 hover:bg-orange-500 text-orange-500 hover:text-white font-normal py-2 px-4 rounded-r-lg rounded-l-lg hover:shadow-lg">Book
                Appointment</a>
        </div>
    </div>

    {{-- -------------------------------------------------------------------blog---------------------------------------------- --}}

    {{--
<div class="w-[1400px] ml-56 mt-24 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select tab</label>
        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Statistics</option>
            <option>Services</option>
            <option>FAQ</option>
        </select>
    </div>
    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600"><b>Statistics</b></button>
        </li>
        <li class="w-full">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600"><b>Services</b></button>
        </li>
        <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600"><b>FAQ</b></button>
        </li>
    </ul>
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Contributors</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Organizations</dd>
                </div>
            </dl>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
            <!-- List -->
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Dynamic reports and dashboards</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Templates for everyone</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Development workflow</span>
                </li>
                <li class="flex space-x-2 rtl:space-x-reverse items-center">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="leading-tight">Limitless business automation</span>
                </li>
            </ul>
        </div>
        <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                    <span>Is there a Figma file available?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <iframe class="mt-9"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14875.656322550647!2d72.8584513!3d21.2352554!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f30b7912685%3A0x96e904c8eb74102e!2sOctal%20Infotech!5e0!3m2!1sen!2sin!4v1699268925368!5m2!1sen!2sin"
        width="1900" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- --------------------------------------------------footer-------------------------------------------------- --}}
    @include('layouts.footer')
   {{-- ------------------------------------------------end footer------------------------------------------------- --}}
</body>

</html>
