<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>user</title>
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

        {{-- table section-------------- --}}
        <div class="py-12">
            <div class="max-w-[1250px]  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="font-bold text-2xl  text-slate-600">User</h1>
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-b border-b-sky-400 text-slate-700 text-1xl">
                                    <th class="py-2">name</th>
                                    <th class="py-2">email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="py-2">{{ $user->name }}</td>
                                        <td class="py-2">{{ $user->email }}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </x-app-layout>

</body>

</html>
