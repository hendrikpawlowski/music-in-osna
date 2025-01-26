<x-standard-layout>
    <div x-data
        @scroll.window.throttle="console.log('scroll'); console.log($refs.scrollHint); $refs.scrollHint.remove()">
        <header class="mx-auto max-w-4xl flex items-center h-140 px-4 sm:px-6 lg:px-8">
            <div>
                <h1 class="max-w-2xl text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
                    music in osnabrooklyn
                </h1>
                <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-lg">Anim aute id magna aliqua ad
                    ad
                    non
                    deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
                <div class="mt-10 gap-6 flex items-center">
                    <a href="#"
                        class="rounded-md transition bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                        Gig</a>
                    {{-- <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more</a> --}}
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            {{-- <div class="w-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor" class="size-6 stroke-indigo-600 mb-4 animate-bounce">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
            </svg>
        </div> --}}
            <ul role="list" class="gap-6">
                <li class="flex justify-center items-center w-full rounded-md py-3">
                    <div class="w-full h-0.5 bg-indigo-500 rounded-full"></div>
                    <p class="px-4 text-base text-indigo-600">24.10.2025</p>
                    <div class="w-full h-0.5 bg-indigo-500 rounded-full"></div>
                </li>
                {{-- <li
                    class="mt-2 flex justify-center rounded-md px-6 items-center gap-x-6 py-3 bg-indigo-50 cursor-pointer transition">
                    <p class="text-indigo-600">24.10.2025</p>
                </li> --}}
                {{-- <li
                    class="mt-2 flex justify-center rounded-md px-6 items-center gap-x-6 py-3 border border-indigo-500 cursor-pointer transition">
                    <p class="text-indigo-600">24.10.2025</p>
                </li> --}}
                <li
                    class="mt-2 flex rounded-md px-6 justify-between items-center gap-x-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex items-center">
                        <p class="text-sm w-16">18:30</p>
                        <div class="">
                            <p class="text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                            {{-- <p class="truncate text-xs text-gray-500">Ari Hoenig, deine Mudda, dein Vadda</p> --}}
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-sm text-gray-900">15€</p>
                        <p class="pl-6 text-sm text-gray-900">Grand Hotel</p>
                        {{-- <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time> --}}
                        </p>
                    </div>
                </li>
                <li
                    class="mt-2 flex rounded-md px-6 justify-between items-center gap-x-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex items-center">
                        <p class="text-sm w-16">18:30</p>
                        <div class="">
                            <p class="text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                            {{-- <p class="truncate text-xs text-gray-500">Ari Hoenig, deine Mudda, dein Vadda</p> --}}
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-sm text-gray-900">15€</p>
                        <p class="pl-6 text-sm text-gray-900">Grand Hotel</p>
                        {{-- <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time> --}}
                        </p>
                    </div>
                </li>
                <li class="mt-8 flex justify-center items-center w-full rounded-md py-3">
                    <div class="w-full h-0.5 bg-indigo-500 rounded-full"></div>
                    <p class="px-4 text-base text-indigo-600">24.10.2025</p>
                    <div class="w-full h-0.5 bg-indigo-500 rounded-full"></div>
                </li>
                <li
                    class="mt-2 flex rounded-md px-6 justify-between items-center gap-x-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex items-center">
                        <p class="text-sm w-16">18:30</p>
                        <div class="">
                            <p class="text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                            {{-- <p class="truncate text-xs text-gray-500">Ari Hoenig, deine Mudda, dein Vadda</p> --}}
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-sm text-gray-900">15€</p>
                        <p class="pl-6 text-sm text-gray-900">Grand Hotel</p>
                        {{-- <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time> --}}
                        </p>
                    </div>
                </li>
                <li
                    class="mt-2 flex rounded-md px-6 justify-between items-center gap-x-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex items-center">
                        <p class="text-sm w-16">18:30</p>
                        <div class="">
                            <p class="text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                            {{-- <p class="truncate text-xs text-gray-500">Ari Hoenig, deine Mudda, dein Vadda</p> --}}
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-sm text-gray-900">15€</p>
                        <p class="pl-6 text-sm text-gray-900">Grand Hotel</p>
                        {{-- <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time> --}}
                        </p>
                    </div>
                </li>
                <li
                    class="mt-2 flex rounded-md px-6 justify-between items-center gap-x-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                    <div class="flex items-center">
                        <p class="text-sm w-16">18:30</p>
                        <div class="">
                            <p class="text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                            {{-- <p class="truncate text-xs text-gray-500">Ari Hoenig, deine Mudda, dein Vadda</p> --}}
                        </div>
                    </div>
                    <div class="flex">
                        <p class="text-sm text-gray-900">15€</p>
                        <p class="pl-6 text-sm text-gray-900">Grand Hotel</p>
                        {{-- <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time> --}}
                        </p>
                    </div>
                </li>
            </ul>
        </main>

        <div x-ref="scrollHint"
            class="flex items-center justify-center w-full h-32 fixed bottom-0 left-0 bg-gradient-to-t from-white to-transparent">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor" class="size-6 stroke-indigo-600 mb-4 animate-bounce">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
            </svg> --}}
        </div>
    </div>
</x-standard-layout>
