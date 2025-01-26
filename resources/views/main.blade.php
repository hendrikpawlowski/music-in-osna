<x-standard-layout>
    {{-- <div class="pt-8">
        <nav class="mx-auto max-w-4xl flex gap-x-2 flex-end justify-end px-4 sm:px-6 lg:px-8 bg-gray-10">
            <a href="#"
                class="block items-center rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900">Log
                In</a>
            <a href="#"
                class="block items-center rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 hover:text-gray-900">Sign
                Up</a>
        </nav>
    </div> --}}
    <div class="relative">
        <header class="mx-auto max-w-4xl flex items-center lg:h-100 px-4 sm:px-6 py-8 sm:py-16 lg:px-8">
            <div class="">
                <h1 class="max-w-2xl text-5xl font-semibold tracking-tight text-balance text-gray-900 lg:text-6xl">
                    music in osna
                </h1>
                <p class="mt-6 text-base text-gray-900 max-w-2xl">Anim aute id magna aliqua ad ad non deserunt sunt.
                    Qui
                    irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
                <div class="pt-6 block">
                    <a href="{{ route('submit-gig') }}"
                        class="text-sm/6 py-1.5 inline-block rounded-md border border-indigo-600 transition text-indigo-600 px-4 shadow-xs hover:bg-indigo-5 hover:border-indigo-700 hover:text-indigo-800 focus-visible:outline-2 focus-visible:outline-offset-2">Submit
                        Gig</a>
                </div>
            </div>
            {{-- <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="" class="size-8 stroke-indigo-600 absolute top-35 left-40 animate-">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="" class="size-8 stroke-indigo-600 absolute top-50 right-70 animate- offset-20">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="" class="size-8 stroke-indigo-600 absolute top-100 right-120 animate- offset-20">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                </svg>
            </div> --}}
        </header>
    </div>
    <main class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 pb-20">
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
                class="mt-2 flex text-gray-900 rounded-md w-full px-2 text-sm sm:px-4 lg:px-6 py-3 border border-gray-200 cursor-pointer hover:border-gray-300 transition">
                <div class="flex pr-2 sm:pr-4 lg:pr-6 items-center border-r border-gray-200 text-sm mt-0.5">
                    <p>18:30</p>
                </div>
                <div class="pl-2 sm:pl-4 lg:pl-6 flex justify-between w-full items-center">
                    <div class="justify-between sm:flex items-center">
                        <p class="text-sm sm:text-base font-semibold text-gray-900">Ari Hoenig Trio</p>
                        <div class="flex items-center bg-gry-200 max-w-xs text-indigo-500 mt-0.5 sm:pl-4 lg:pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                class="size-4 min-w-4 stroke-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="pl-1">
                                Grand Hotel
                            </p>
                        </div>
                    </div>
                    <p class="pl-4">44,5€</p>
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

    {{-- <div x-ref="scrollHint"
            class="flex items-center justify-center w-full h-32 fixed bottom-0 left-0 bg-gradient-to-t from-white to-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor" class="size-6 stroke-indigo-600 mb-4 animate-bounce">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
            </svg>
        </div> --}}
</x-standard-layout>
