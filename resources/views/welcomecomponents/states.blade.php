<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>status</title>
</head>
<style></style>

<body>
    @include('layouts.cdn')
    @include('layouts.header')

    {{-- <div class=" rounded overflow-hidden shadow-lg  hover:shadow-xl mx-auto mt-8 h-24 flex">
   <div> <img class="w-12 ml-36  " src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/1084/InfyHMS-80.png"    alt="Sunsetin the mountains">
  </div>

        <div class="font-bold text-xl ml-9 mt-3">
            Welcome {{ $users->name}}

        </div>
</div> --}}

    <div class="overflow-hidden shadow-lg hover:shadow-xl rounded mx-auto mt-8 h-32 flex">
        <div> <img class="w-28 ml-36 mt-8 rounded-full "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFdsH9Z4C4Fa0reALufXP4x1um2UpwUu9stg&s"
                alt="Sunsetin the mountains">
        </div>
        <div class="font-bold text-lg mt-20 ml-9">
            Welcome {{ $users->name }}
            
        </div>
        
    </div>
    <div class=" w-[70%] ml-[30%] mt-32  ">
        <div class="px-4 sm:px-0">
            <h3 class=" font-semibold leading-7 text-gray-900 text-2xl">Appointment Information</h3>
            <p class="mt-1 max-w-2xl  leading-6 text-gray-500 text-xl">Personal details and Appointment.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $appointments->name }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Mobile </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $appointments->mobile }}/
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6  font-bold">Blood group</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0  ">
                        <b>{{ $appointments->blad_grup}}</b></dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Department</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $appointments->Department->name }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Doctor name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0  w-14">
                        <b>{{ $appointments->doctor->name }}</b></dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Appointment Status</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 bg-red-400 w-14">
                        <b>{{ $appointments->is_conform ? ' confirm ' : 'Pending' }}</b></dd>
                </div>
                
                {{-- <body class="flex items-center justify-center h-screen bg-gray-100"> --}}
                    
                </body>

                {{-- <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
          <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
              <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                <div class="flex w-0 flex-1 items-center">
                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                  </svg>
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                    <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                  </div>
                </div>
                <div class="ml-4 flex-shrink-0">
                </div>
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </li>
              <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                <div class="flex w-0 flex-1 items-center">
                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                  </svg>
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                    <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                  </div>
                </div>
                <div class="ml-4 flex-shrink-0">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                </div>
              </li>
            </ul>
          </dd>
        </div> --}}
            </dl>
        </div>
    </div>

    <div class="flex justify-around my-64 ml-48 mr-64">

        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl  hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-20 " src="image\c1.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">+91 78000 79000</div>
                <p class="text-gray-700 text-base text-center">
                    Call Today
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl  hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-28 " src="image\c2.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">abchospital@gmail.com
                </div>
                <p class="text-gray-700 text-base text-center">
                    Contact Hospital
                </p>
            </div>
        </div>
        <div
            class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl  hover:translate-y-3 hover:bg-slate-100">
            <img class="w-12 ml-16 " src="image\c3.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-center">00:00 to 24:00

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
    @include('layouts.footer')
</body>

</html>
