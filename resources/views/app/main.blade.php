<x-html-head>
    <x-app.app-layout :active_tab="'setup'">
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-600 px-4 py-2 mb-16 fixed">{{ session('success') }}</div>
        @endif
        <div id="alert-1"
            class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Berhasil Update Setpoin
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>


        <p class="text-3xl font-semibold mb-2">Hello, Fauzan!</p>
        <p class="text-gray-400 font-light mb-10">you can change set point here</p>
        <div class="w-1/3 flex gap-2">

            {{-- horizontal --}}
            <div class="bg-gray-800 p-4 w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Horizontal Value</p>
                <p class="text-center text-5xl">{{ $horizontal }}</p>
                <button class="bg-white text-black rounded-lg" id="edit-horizontal-btn"
                    onclick="handleClickHorizontalButton()">Edit</button>
            </div>

            {{-- vertical --}}
            <div class="bg-gray-800 p-4 w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Vertical Value</p>
                <p class="text-center text-5xl">{{ $vertical }}</p>
                <button class="bg-white text-black rounded-lg" id="edit-vertical-btn"
                    onclick="handleClickVerticalButton()">Edit</button>
            </div>
        </div>
    </x-app.app-layout>
</x-html-head>
