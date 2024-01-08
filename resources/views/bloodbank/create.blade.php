<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blood-Donor Create</title>
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
        <div class="max-w-[1250px] mx-auto sm:px-6 lg:px-24">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h1 class="font-bold text-2xl  text-slate-600">Create Blood Donor</h1>
                        <a href="{{ route('bloodbank.index') }}"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Back
                        </a>
                    </div>

                    <div class="px-6 py-8 lg:px-80">
                        <form class="space-y-6" action="{{route('bloodbank.store')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                        <div class="flex gap-12">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   Full Name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter Full Name" required>
                            </div>


                            <div>
                                <label for="department"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                    Blood-Grup</label>
                                <select id="" name="BloodGroup"
                                    class="rounded-md bg-gray-50 border border-gray-300 w-full">
                                    <option value="" selected disabled>BloodGrup</option>

                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>

                                </select>
                            </div>
                        </div>

                           <div class="flex gap-12">
                            <div>
                                <label for="BagNumber"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    BAG-Number</label>
                                <input type="number" name="BagNumber" id="BagNumber"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter BAG-Numbert" required>
                            </div>
                            <div>
                                <label for="Component"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   Component</label>
                                <input type="text" name="Component" id="Component"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Enter Component" required>
                            </div>
                           </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  ">
                                Create
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
