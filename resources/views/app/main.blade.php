<x-html-head>
    <x-app.app-layout :active_tab="'setup'">
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-600 px-4 py-2 mb-16">{{ session('success') }}</div>
        @endif

        <p class="text-3xl font-semibold mb-2">Hello, {{ Auth::user()->username }}!</p>
        <p class="text-gray-400 font-light mb-10">you can change set point here</p>
        <div class="flex flex-col sm:flex-row gap-2">

            {{-- horizontal --}}
            <div class="bg-gray-800 p-4 sm:w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Horizontal Value</p>
                <p class="text-center text-5xl">{{ $horizontal }}</p>
                <button class="bg-white text-black rounded-lg" id="edit-horizontal-btn"
                    onclick="handleClickHorizontalButton()">Edit</button>
            </div>

            {{-- vertical --}}
            <div class="bg-gray-800 p-4 sm:w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Vertical Value</p>
                <p class="text-center text-5xl">{{ $vertical }}</p>
                <button class="bg-white text-black rounded-lg" id="edit-vertical-btn"
                    onclick="handleClickVerticalButton()">Edit</button>
            </div>
        </div>
    </x-app.app-layout>
</x-html-head>
