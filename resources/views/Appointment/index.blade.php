<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
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

        <div class="py-12 ">
            <div class="max-w-[1600px] ml-64 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between">
                            {{-- <h1 class="font-bold text-2xl  text-slate-600">Appointment</h1> --}}
                            <div>
                                <a href="{{ route('appointment.create') }}"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <i class="fa-solid fa-plus"></i>  Create Appointment
                                </a>
                            </div>

                            <div class="relative">
                                <form action="{{ route('appointment.index') }}" method="GET">

                                    <input type="search"class="form-control rounded-l-lg " placeholder="Search..."
                                        name="search" value="{{ isset($search) && !empty($search) ? $search : '' }}"
                                        type="text" name="search" placeholder="Search..">

                                    <button type="submit"
                                        class="  border-x-2 border-y-2 p-2 bg-blue-500 text-white  rounded-r-lg ml-[-5px] ">Search
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                            {{--
                              <div>
                            <a href="{{ route('appointment.create') }}"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create Appointment
                            </a>
                        </div> --}}
                        </div>

                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-b border-b-sky-400 text-slate-700 text-1xl">

                                    <th class="py-2 ">Name</th>
                                    <th class="py-2">Gender</th>
                                    <th class="py-2">Blad-grup</th>
                                    {{-- <th class="py-2">DOB</th> --}}
                                    <th class="py-2">Dpartment</th>
                                    <th class="py-2">Doctor</th>
                                    {{-- <th class="py-2">Mobile</th> --}}
                                    {{-- <th class="py-2">Address</th> --}}
                                    <th class="py-2">Date-Time</th>
                                    <th class="py-2">confirmetion</th>
                                    <th class="py-2">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($appointments as $appointment)
                                    <tr>

                                        <td
                                            class="py-4 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ $appointment->name }} </td>
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ $appointment->gender }} </td>
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ $appointment->blad_grup }}</td>
                                        {{-- <td class="py-3"> {{ $appointment->bod }} </td> --}}
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ @$appointment->department->name }} </td>
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ @$appointment->doctor->name }} </td>
                                        {{-- <td class="py-4"> {{ $appointment->mobile }} </td> --}}
                                        {{-- <td class="py-3"> {{ $appointment->address }} </td> --}}
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ @$appointment->date_time }} </td>
                                        <td
                                            class="py-3 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                            {{ @$appointment->is_conform ? ' confirm ' : 'Pending' }}
                                        </td>
                                        <td>
                                            <a href="{{ route('appointment.confirm', $appointment->id) }}"
                                                id="btnSuccess"
                                                class="bg-lime-500 text-white rounded-lg py-2 px-3  hover:bg-lime-600">
                                                <i class="fa-solid fa-check"></i> confirm</a>
                                        </td>
                                        <td class="py-3">
                                            {{-- data-modal-toggle="edit-button" --}}
                                            <a href="{{ route('appointment.edit', $appointment->id) }}"
                                                data-item="{{ $appointment }}" data-modal-toggle="edit-button"
                                                class="px-5 py-2.5 edit-button text-white bg-blue-700 rounded-md hover:bg-blue-900"><i
                                                    class="fa-solid fa-pen-to-square"></i>Edit</a>
                                        </td>
                                        <td>
                                            <!-- Modal toggle -->
                                            <div class="flex  m-3">
                                                <button id="deleteButton" data-modal-toggle="deleteModal"
                                                    class="block text-white  bg-red-700 hover:bg-red-900 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                    type="button">
                                                    <i class="fa-solid fa-trash"></i>Delete
                                                </button>
                                            </div>
                                            <!-- Main modal -->
                                            <div id="deleteModal" tabindex="-1" aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <button type="button"
                                                            class="text-black-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-whate-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="deleteModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure
                                                            you confarm to delete this item?</p>
                                                        <div class="flex justify-center items-center space-x-4">
                                                            <button data-modal-toggle="deleteModal" type="button"
                                                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                No, cancel
                                                            </button>
                                                            <form
                                                                class="px-4 py-2 w-7/12 text-white bg-red-700 rounded-md hover:bg-red-900"
                                                                style="width: 67px; height: 36px"
                                                                action="{{ route('appointment.destroy', $appointment->id) }}"
                                                                method="delete">
                                                                <button type="submit">Delete</button>
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>


                    </div>
                </div>
            </div>
        </div>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-3xl text-blue-600 text-center py-2">No Record
                Found.</td>
        </tr>
        @endforelse
        </tbody>
        </table>
        <div class="container my-4 flex justify-end">
            {{ $appointments->links() }}
        </div>
        </div>
        </div>
        </div>
        </div>
    </x-app-layout>
    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!-- core script  -->
    <script type="text/javascript">
        // consts

        const btnSuccess = document.getElementById('btnSuccess');
        // const btnError = document.getElementById('btnError');
        // const btnWarning = document.getElementById('btnWarning');

        // Event Listeners
        // btnInfo.addEventListener('click', displayInfoToaster);
        btnSuccess.addEventListener('click', displaySuccessToaster);
        // btnError.addEventListener('click', displayErrorToaster);
        // btnWarning.addEventListener('click', displayWarningToaster);

        // functions
        // function displayInfoToaster() {
        //     toastr.options.timeOut = 1500; // 1.5s
        //     toastr.info('info messages');
        // }

        function displaySuccessToaster() {
            toastr.options.timeOut = 1500; // 1.5s
            toastr.success('Success messages');
        }

        // function displayErrorToaster() {
        //     toastr.options.timeOut = 1500; // 1.5s
        //     toastr.error('errors messages');
        // }

        // function displayWarningToaster() {
        //     toastr.options.timeOut = 1500; // 1.5s
        //     toastr.warning('warning messages');
        // }
    </script>
</body>

</html>
