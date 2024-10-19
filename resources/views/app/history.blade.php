<x-html-head>
    <x-app.app-layout :active_tab="'history'">
        <p class="text-3xl mb-10">History</p>
        <table class="w-full">
            <tr class="bg-gray-100">
                <th class="p-4">No</th>
                <th class="p-4">Setpoint</th>
                <th class="p-4">Changer</th>
                <th class="p-4">Change at</th>
            </tr>
            @for ($i = 1; $i < 20; $i++)
                <tr class="text-center">
                    <td class="p-4">{{ $i }}</td>
                    <td class="p-4">10</td>
                    <td class="p-4">Fauzan Pradana</td>
                    <td class="p-4">10/10/2024</td>
                </tr>
            @endfor
        </table>
    </x-app.app-layout>
</x-html-head>
