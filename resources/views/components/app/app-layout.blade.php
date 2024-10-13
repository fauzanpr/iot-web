<div class="flex">
    <aside class="w-1/6 text-gray-500 font-light border-r h-screen flex flex-col justify-between">
        <div>
            <div class="p-8">
                <img src={{ asset('assets/antena.png') }} alt="gambar antena" class="w-1/3">
                <p class="font-medium text-black">Application Setup Manager</p>
            </div>
            <div>
                <a href="/app/setup"
                    class="block py-3 px-8 bg-gray-100 hover:bg-gray-100 text-black font-semibold">Setup</a>
                <a href="/app/history" class="block py-3 px-8 hover:bg-gray-100">History</a>
            </div>
        </div>
        <a href="/app/logout" class="block bg-red-100 text-red-500 font-medium py-3 px-8">Logout</a>
    </aside>
    <main class="w-5/6 block h-screen">
        <div class="px-16 py-8">
            {{ $slot }}
        </div>
    </main>
</div>
