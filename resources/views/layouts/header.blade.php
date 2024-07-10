<style>
	.link-underline {
		border-bottom-width: 0;
		background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
		background-size: 0 3px;
		background-position: 0 100%;
		background-repeat: no-repeat;
		transition: background-size .5s ease-in-out;
	}

	.link-underline-black {
		background-image: linear-gradient(transparent, transparent), linear-gradient(black, black)
	}

	.link-underline:hover {
		background-size: 100% 3px;
		background-position: 0 100%
	}
</style>
<header class="top-0 z-50 fixed w-full">
    <div class="text-center h-20 bg-orange-300 ">
        <a href="{{ '/welcome' }}">
            <button
                class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline mt-5 link link-underline link-underline-black ">Home</button></a>

        {{-- <a href="{{route('doctor')}}"> <button --}}
                {{-- class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Doctor</button></a> --}}

        <a href="{{ route('servies') }}"> <button
                class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Servies</button></a>

        {{-- <button
            class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Blog</button> --}}

        <a href="{{ route('appointment') }}"><button
                class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Appoiment</button></a>

        <a href="{{ route('contect') }}"><button
                class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Contect</button></a>

        <a href="{{ route('statesabc') }}"><button
                    class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Status</button></a>


{{--
        <a><button
                 class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">logout</button></a> --}}

                 @if (Route::has('login'))
                 @auth
                     {{-- <a href="{{ url('/home') }}"
                     class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Home</a> --}}
                 @else
                     <a href="{{ route('login') }}"
                     class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Login</a>

                     @if (Route::has('register'))
                         <a href="{{ route('register') }}"
                         class="bg-orange-300 text-white hover:bg- hover:text-black border border-orange-300  px-4 py-2 mx-0 outline-none focus:shadow-outline link link-underline link-underline-black ">Register</a>
                     @endif

                 @endauth

             @endif
    </div>
    {{-- <nav>
        <ul class="flex gap-4 text-lg ">
            <li> <a href="{{route('welcome')}}">Home</a> </li>
            <li> <a href="{{route('welcome')}}">servies</a> </li>
            <li> <a href="{{route('welcome')}}">Blog</a> </li>
            <li> <a href="{{route('welcome')}}">doctor</a> </li>
            <li> <a href="{{route('welcome')}}">Appointment</a> </li>
            <li> <a href="{{route('welcome')}}">About us</a> </li>
            <li> <a href="{{route('welcome')}}">Contect</a> </li>
        </ul>
    </nav> --}}
</header>
