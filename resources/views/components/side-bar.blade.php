<div>
    {{-- sidebar start ------------------------------ --}}

    <div class="min-h-screen flex flex-row bg-gray-100 fixed top-0 gap-16">
        <div class="flex flex-col w-56 bg-white  overflow-hidden">
            <div class="flex items-center justify-center h-[64px] shadow-md">
                <div>
                    <img src="https://infyhms-staging.sgp1.cdn.digitaloceanspaces.com/1084/InfyHMS-80.png" alt=""
                        class="rounded-xl w-12 ml-[-5px] ">
                </div>
                <h1 class="text-2xl uppercase text-black"><button>HMS</button></h1>
            </div>
            <ul class="flex flex-col py-4">
                <li>
                    <a href="{{ route('deshbord') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"> <i
                                class="fa-solid fa-house text-green-500"></i>
                        </span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="fa-solid fa-user-tie"></i></span>
                        <span class="text-sm font-medium">Master Admin</span>
                    </a>
                </li> --}}
                <li>
                    <a href=" {{ route('user.index') }} "
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-user text-sky-500"></i></span>
                        <span class="text-sm font-medium">Users</span>
                    </a>
                </li>
                <li>
                    <a href=" {{ route('doctor.index') }} "
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-user-doctor text-indigo-500"></i></span>
                        <span class="text-sm font-medium">Doctors</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('department.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-building text-cyan-200"></i></span>
                        <span class="text-sm font-medium">Departments</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('appointment.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-calendar-check text-red-500"></i></span>
                        <span class="text-sm font-medium">Appointments</span>
                        {{-- <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">2</span> --}}
                    </a>
                </li>
                <li>
                    <a href="{{ route('patient.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-bed-pulse"></i></span>
                        <span class="text-sm font-medium">Pesants</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bloodbank.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-hand-holding-droplet text-red-600"></i></span>
                        <span class="text-sm font-medium ">Blood banks</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('bloodbank.index') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-hand-holding-droplet text-red-600"></i></span>
                        <span class="text-sm font-medium ">Bill</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('profile.edit') }}"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-regular fa-user text-yellow-500"></i></span>
                        <span class="text-sm font-medium">Profile</span>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                                class="fa-solid fa-right-from-bracket text-black"></i></span>
                        <span class="text-sm font-medium ">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- sidebar start end------------------------------ --}}


</div>
