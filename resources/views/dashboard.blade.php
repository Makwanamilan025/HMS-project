<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<style>
    .group:hover .group-hover\:block {
        display: block;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
    }


    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <x-side-bar />
        <div>
            <div class="h-3.5 mt-10">
                <div class="py-12">
                    <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20  ">
                        <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                            <div class="p-6 text-gray-900">
                                {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="fa-solid fa-calendar-check text-red-500"></i></span>
                                &nbsp;&nbsp;&nbsp; &nbsp;<span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Appointment</span>
                                <h2 class="font-bold text-3xl  text-slate-600  text-center">1</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-12">
                    <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20 ">
                        <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                            <div class="p-6 text-gray-900">
                                {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                        class="fa-solid fa-user text-sky-500 "></i></span>
                                &nbsp;&nbsp;&nbsp; &nbsp;<span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Admin</span>
                                <h2 class="font-bold text-3xl  text-slate-600  text-center">1</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-96 ">
                <div class="py-12">
                    <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20 right-28 ">
                        <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                            <div class="p-6 text-gray-900"style="margin-top: -13px;">
                                {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                <span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400 "><i
                                        class="fa-solid fa-user-doctor text-indigo-500"></i></span>
                                <span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Doctors</span>
                                <h2 class="font-bold text-3xl  text-slate-600 text-center">1</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-12">
                    <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20  ">
                        <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                            <div class="p-6 text-gray-900" style="margin-top: -2px;">
                                {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                <span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400 "><i
                                    class="fa-solid fa-building text-cyan-200"></i></span>
                                &nbsp;&nbsp;&nbsp; &nbsp; <span
                                    class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Departments</span>
                                <h2 class="font-bold text-3xl  text-slate-600 text-center  ">1</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="margin-left: 810px; margin-top:-443px ">
                    <div class="py-12">
                        <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20 right-28 ">
                            <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                                <div class="p-6 text-gray-900"style="margin-top: -13px;">
                                    {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400 "><i class="fa-solid fa-hand-holding-droplet text-red-600"></i></span>
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600      ml-7">Bloodbank</span>
                                    <h2 class="font-bold text-3xl  text-slate-600 text-center">1</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-12">
                        <div class="max-w-[500px]  mx-60 sm:px-6 lg:px-20  ">
                            <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                                <div class="p-6 text-gray-900" style="margin-top: -2px;">
                                    {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400 "><i
                                            class="fa-solid fa-money-bill text-slate-800"></i></span>
                                    &nbsp;&nbsp;&nbsp; &nbsp; <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Bill</span>
                                    <h2 class="font-bold text-3xl  text-slate-600 text-center  ">1</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-12" style="margin-top: -452px; margin-left: 35%; width: 1000px">
                        <div class="max-w-  mx-60 sm:px-6 lg:px-20  ">
                            <div class="bg-white  shadow-sm sm:rounded-lg hover:shadow-lg hover:font-bold">
                                <div class="p-6 text-gray-900">
                                    {{-- <h1 class="font-bold text-2xl  text-slate-600  text-center">Deshbord</h1> --}}
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400 "><i class="fa-solid fa-bed-pulse"></i></span>
                                    &nbsp;&nbsp;&nbsp; &nbsp; <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-600">Patients</span>
                                    <h2 class="font-bold text-3xl  text-slate-600 text-center  ">1</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h1 class="text-2xl font-bold  ml-[17%] mt-[15%]">Available blood around you</h1>
            </div>
            <div class='max-w-md mx-auto'>
                <div
                    class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden ml-[145%]">
                    <div class="grid place-items-center h-full w-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text"
                        id="search" placeholder="Search something.." />
                </div>
            </div>
        </div>

        <table class="ml-80">

            <tr>
                <th>Name</th>
                <th>BloodGroup</th>
                <th>BagNumber</th>
                <th>Component</th>
            </tr>
            @forelse ($bloodbanks as $bloodbank)
                <tr>
                    <td>{{ $bloodbank->name }}</td>
                    <td>{{ $bloodbank->BloodGroup }}</td>
                    <td>{{ $bloodbank->BagNumber }}</td>
                    <td>{{ $bloodbank->Component }}</td>
                <td>@empty</td>
                </tr>
            @endforelse
        </table>
        <div class="mr-28 mt-4 mb-11">{{ $bloodbanks->links() }}</div>
    </x-app-layout>

</body>

</html>
