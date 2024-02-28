<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>
    <title>Appointment</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        {{-- sidebar start ------------------------------ --}}
        <x-side-bar />
        {{-- sidebar end ------------------------------ --}}
        <div class="py-12">
            <div class="max-w-[1100px] mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between">
                            <h1 class="font-bold text-2xl  text-slate-600">Update Appointment</h1>
                            <a href="{{ route('appointment.index') }}"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                <i class="fa-solid fa-rotate-left"></i>
                            </a>
                        </div>

                        <div class="px-6 py-6 lg:px-8">
                            <form class="space-y-6" action="{{ route('appointment.update', $appointments->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-bl-900 dark:text-white">
                                        Name</label>
                                    <input type="name" name="name" id="name"
                                        value="{{ $appointments->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="enter name" required>

                                    <label for="mobile"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        style="margin-left: 450px;
                                    margin-top: -78px;">
                                        Mobile</label>
                                    <input type="phone" name="mobile" id="mobile"
                                        value="{{ $appointments->mobile }}" style="margin-left: 450px;"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="+91............" required>
                                </div>


                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                <select id="countries" name="gender" value="{{ $appointments->gender }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-70 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    style="margin-left:600px;  margin-top: -85px; ">Select an blad-group</label>
                                <select id="" name="blad_grup" value="{{ $appointments->blad_grup }}"
                                    style="margin-left:600px;"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-70 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>A-</option>
                                    <option value="A-">AB+</option>
                                    <option value="AB+">AB-</option>
                                    <option value="O-">O-</option>
                                    <option value="O+">O+</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                </select>
                                <div style="margin-top: -76px; margin-left:280px">
                                    <label for="DOB" name="bod"
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                        style="margin-top:-50px">DOB</label>
                                    <input type="date" name="bod" value="{{ $appointments->bod }}">
                                </div>
                                <div class="col-span-full">
                                    <label for="about"
                                        class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                    <div class="mt-2">
                                        <textarea id="address" name="address" value="{{ $appointments->address }}" rows="3"
                                            class="block w-[780px] rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="Full Address"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label for="department"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                        Department</label>
                                    <select id="department_id" name="department_id"
                                        class="rounded-md bg-gray-50 border border-gray-300 w-80 p-3.5">
                                        <option value="department" selected disabled>Department
                                        <option>
                                            @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>


                                    <label for="department"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        style="margin-left: 40%; margin-top:-8% ">Select
                                        Doctor</label>
                                    <select style="margin-left: 40%;" id="" name="doctor_id"
                                        class="rounded-md bg-gray-50 border border-gray-300 w-80 p-3.5">
                                        <option value="" selected disabled>Doctor</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div>
                                    <input id="appointment" type="datetime-local"
                                        name="date_time"value="{{ $appointments->date_time }}" min="2024-04-01T08:30"
                                        max="2024-04-30T16:30" required />
                                    <span class="validity"></span>
                                    &nbsp;
                                    <label for="appointment">
                                        Choose your preferred appointment date and time
                                    </label>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  ">
                                    Update
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>

</html>
