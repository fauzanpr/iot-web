<x-html-head>
    <x-app.app-layout :active_tab="'history'">
        <p class="text-3xl mb-10">History</p>
        <table class="w-full text-center">
            <tr class="bg-gray-100">
                <th class="p-4">No</th>
                <th class="p-4">Vertical</th>
                <th class="p-4">Horizontal</th>
                <th class="p-4">Changer</th>
                <th class="p-4">Change at</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($configs as $config)
                <tr>
                    <td class="p-4">{{ $i }}</td>
                    <td class="p-4">{{ $config['vertical'] }}</td>
                    <td class="p-4">{{ $config['horizontal'] }}</td>
                    <td class="p-4">{{ $config["created_by"] }}</td>
                    <td class="p-4">{{ date('d-m-Y', strtotime($config['created_at'])) }}</td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </table>
    </x-app.app-layout>
</x-html-head>
