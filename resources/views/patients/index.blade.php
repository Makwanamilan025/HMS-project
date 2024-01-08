<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Patients</title>
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
            <div class="max-w-[1650px] ml-64 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between">
                            <h1 class="font-bold text-2xl  text-slate-600">Patients</h1>
                        </div>

                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-b border-b-sky-400 text-slate-700 text-1xl">

                                    <th class="py-2 ">Name</th>
                                    <th class="py-2">Mobile</th>
                                    <th class="py-2">Address</th>
                                    <th class="py-2">Gender</th>
                                    <th class="py-2">Blad-grup</th>
                                    <th class="py-2">DOB</th>
                                    <th class="py-2">Date-Time</th>
                                    <th class="py-2">States</th>
                                    <th class="py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $patients)
                                    <tr>
                                        <td class="py-4"> {{ $patients->name }} </td>
                                        <td class="py-4"> {{ $patients->mobile }} </td>
                                        <td class="py-3"> {{ $patients->address }} </td>
                                        <td class="py-3"> {{ $patients->gender }}</td>
                                        <td class="py-3"> {{ $patients->blad_grup }} </td>
                                        <td class="py-3"> {{ $patients->bod }}</td>
                                        <td class="py-3"> {{ $patients->created_at }}</td>
                                        <td class="py-3"> {{ $patients->states ? ' outdoor' : 'indoor' }}</td>
                                        <td>
                                            {{-- data-modal-toggle="edit-button" --}}
                                            {{-- <a href="#" data-item="" data-modal-toggle="edit-button"
                                                class="px-4 py-2 edit-button text-white bg-blue-700 rounded-md hover:bg-blue-900">edit</a> --}}
                                        </td>
                                        <td>
                                            <!-- Modal toggle -->
                                            <div class="flex justify-center m-3">
                                                <button id="deleteButton" data-modal-toggle="deleteModal"
                                                    class="block text-white  bg-red-700 hover:bg-red-900 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                    type="button">
                                                    Delete
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
                                                            {{-- <form
                                                                class="px-4 py-2 w-7/12 text-white bg-red-700 rounded-md hover:bg-red-900"
                                                                style="width: 70px;height: 36px;"
                                                                action="{{ route('patient.destroy',$patients->id) }}"
                                                                method="DELETE">
                                                                <button type="submit">Delet</button>
                                                                @csrf
                                                            </form> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="{{ route('patient.confirm', $patients->id) }}"
                                                class="bg-lime-500 text-white rounded-lg py-2 px-3 hover:bg-lime-600">Discharge
                                            </a>
                                        </td>
                    </div>
                </div>
            </div>
        </div>
        </td>
        </tr>
    @empty
        </tr>
        @endforelse
        </tbody>
        </table>
        {{ $data->links() }}
        </div>
        </div>
        </div>
        </div>
    </x-app-layout>

</body>

</html>
