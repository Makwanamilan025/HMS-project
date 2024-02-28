<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BloodBank</title>
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
            <div class="max-w-[1250px] mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex justify-between">
                            <h1 class="font-bold text-2xl  text-slate-600">BloodBank</h1>
                            <a href="{{route('bloodbank.create')}}"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                <i class="fa-solid fa-plus"></i> Create Donor
                            </a>
                        </div>
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-b border-b-sky-400 text-slate-700 text-1xl">
                                    <th class="py-2">Name</th>
                                    <th class="py-2">Blood Grup</th>
                                    <th class="py-2">Bag Number</th>
                                    <th class="py-2">Component</th>

                                    <th class="py-4"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bloodbanks as $bloodbank)

                                    <tr>

                                        <td class="py-2"> {{ $bloodbank->name }}</td>
                                        <td class="py-2">{{ $bloodbank->BloodGroup }} </td>
                                        <td class="py-2">{{ $bloodbank->BagNumber }} </td>
                                        <td class="py-2">{{ $bloodbank->Component }} </td>

                                        <td class="py-2">
                                            {{-- data-modal-toggle="edit-button" --}}
                                            <a href=""data-modal-toggle="edit-button"
                                                class="px-4 py-2 edit-button text-white bg-blue-700 rounded-md hover:bg-blue-900"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        </td>
                                        <td class="py-2">
                                            <form
                                                class=" w-24 py-2  text-white ml-6 bg-red-700 rounded-md hover:bg-red-900"
                                                action="{{route('bloodbank.destroy',$bloodbank->id)}}"
                                                method="DELETE">
                                                <button type="submit"><i class="fa-solid fa-trash"></i>Delete</button>
                                                @csrf
                                            </form>
                                        </td>
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
                            <div class="mr-28 mt-4 mb-11">{{ $bloodbanks->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
