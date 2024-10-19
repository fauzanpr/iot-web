<x-html-head>
    <x-app.app-layout :active_tab="'setup'">
        <p class="text-3xl font-semibold mb-2">Hello, Fauzan!</p>
        <p class="text-gray-400 font-light mb-10">you can change set point here</p>
        <div class="w-1/3 flex gap-2">

            {{-- horizontal --}}
            <div class="bg-gray-800 p-4 w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Horizontal Value</p>
                <p class="text-center text-5xl">20</p>
                <button class="bg-white text-black rounded-lg">Edit</button>
            </div>

            {{-- vertical --}}
            <div class="bg-gray-800 p-4 w-fit flex flex-col gap-4 rounded-2xl border text-white border-gray-200">
                <p class="font-light">Vertical Value</p>
                <p class="text-center text-5xl">10</p>
                <button class="bg-white text-black rounded-lg">Edit</button>
            </div>
        </div>
    </x-app.app-layout>
</x-html-head>
