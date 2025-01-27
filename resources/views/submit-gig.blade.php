<x-standard-layout>
    <div class="flex sm:min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="{{ route('main') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6 stroke-indigo-600 hover:stroke-indigo-800">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
            </a>
            <h2 class="mt-4 text-2xl/9 text-center font-bold tracking-tight text-gray-900">Füge einen neuen Gig hinzu
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('submit-gig-post') }}" method="POST">
                @csrf
                <div>
                    <label for="band" class="block text-sm/6 font-medium text-gray-900">Wer spielt?</label>
                    <div class="mt-2">
                        <input type="text" name="band" id="band"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-indigo-600 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="location" class="block text-sm/6 font-medium text-gray-900">In welcher Location?</label>
                    <div class="mt-2">
                        <input type="text" name="location" id="location"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-indigo-600 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="date" class="block text-sm/6 font-medium text-gray-900">Wann gehts los?</label>
                    </div>
                    <div class="mt-2">
                        <input type="datetime-local" name="date" id="date"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-300 focus:border-indigo-600 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                    </div>
                </div>

                <button type="submit"
                    class="flex cursor-pointer w-full justify-center rounded-md border border-indigo-600 hover:border-indigo-700 hover:text-indigo-800 px-3 py-1.5 text-sm/6 text-indigo-600 shadow-sm">Gig
                    hinzufügen</button>
            </form>
        </div>
    </div>
</x-standard-layout>
