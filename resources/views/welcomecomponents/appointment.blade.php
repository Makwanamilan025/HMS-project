<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.cdn')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Appointment </title>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    @include('layouts.header')
    <div class="flex justify-around my-44">
        <div class="mt-48">
            <h2 class="text-6xl text-orange-500 font-bold ">Make Appointment</h2>
        </div>
        <img src="https://hms-staging.infyom.com/web_front/images/page-banner/make-appointment.png" alt=""
            class="w-[35%]">
    </div>
    <div class="py-12">
        <div class="max-w-[1100px] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h1 class="font-bold text-2xl  text-slate-600">Create Appointment</h1>
                    </div>
                    <div class="px-6 py-6 lg:px-8 ">
                        <form class="space-y-6 py-9 " action="{{ route('appointments.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-bl-900 dark:text-white">
                                    Name</label>
                                <input type="name" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="enter name" required>

                                <label for="mobile"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    style="margin-left: 450px;
                                margin-top: -78px;">
                                    Mobile</label>
                                <input type="phone" name="mobile" id="mobile" style="margin-left: 450px;"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="+91............" required>

                            </div>
                            <div>
                                <label for="Email"
                                    class="block mb-2 text-sm font-medium text-bl-900 dark:text-white">
                                    Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="enter email" required>

                                <label for="Password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    style="margin-left: 450px;
                                margin-top: -78px;">
                                    Password</label>
                                <input type="password" name="password" id="password"style="margin-left: 450px;"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter password" required>

                            </div>
                            <div class="grid grid-cols-3">

                                <div>
                                    <label for="Gender"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                    <select id="countries" name="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-70 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                                        <option selected disabled>Choose a Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                        blad-group</label>
                                    <select id="" name="blad_grup"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-70 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                                        <option selected>A-</option>
                                        <option value="A-">AB+</option>
                                        <option value="AB+">AB-</option>
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="DOB" name="bod"
                                        class="block text-sm font-medium leading-6 text-gray-900  focus:ring-orange-500 focus:border-orange-500">DOB</label>
                                    <input type="date" name="bod">
                                </div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div>
                                    <label for="department_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Select
                                        Department</label>
                                    <select id="department_id" name="department_id"
                                        class="rounded-md bg-gray-50 border border-gray-300 w-80 p-3.5">
                                        <option value="department" selected disabled>Department
                                        <option>
                                            @foreach ($department as $depart)
                                        <option value="{{ $depart->id }}">{{ $depart->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="Doctor"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        style=" ">Select
                                        Doctor</label>
                                    <select style="" id="" name="doctor_id"
                                        class="rounded-md bg-gray-50 border border-gray-300 w-80 p-3.5">
                                        <option value="" selected disabled>Doctor</option>
                                        @foreach ($doctor as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="about"
                                    class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <div class="mt-2">
                                    <textarea id="address" name="address" rows="3"
                                        class="block w-[780px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6"
                                        placeholder="Full Address"></textarea>
                                </div>
                            </div>

                            <div>
                                <input id="appointment" type="datetime-local" name="date_time"
                                    min="2024-04-01T08:30" max="2024-04-30T16:30" required />
                                <span class="validity"></span>
                                &nbsp;
                                <label for="appointment">
                                    Choose your preferred appointment date and time
                                </label>
                            </div>
                            <button type="submit"
                                class="w-48 ml- text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800  ">
                                Create
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- --------------------------------------------------footer-------------------------------------------------- --}}
    @include('layouts.footer')
    {{-- ------------------------------------------------end footer------------------------------------------------- --}}

</body>

</html>




