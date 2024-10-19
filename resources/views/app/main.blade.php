<x-html-head>
    <x-app.app-layout :active_tab="'setup'">
        <p class="text-3xl font-semibold mb-2">Hello, Fauzan!</p>
        <p class="text-gray-400 font-light mb-10">you can change set point here</p>
        <div class="w-1/3 flex flex-col gap-2">
            <label for="setpoint" class="block">Set poin</label>
            <input type="number" class="input" id="setpoint" placeholder="Insert your set point here">
            <button class="btn-primary">Submit</button>
        </div>
    </x-app.app-layout>
</x-html-head>
