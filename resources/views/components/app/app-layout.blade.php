{{-- <x-app.modal.horizontal-modal></x-app.modal.horizontal-modal>
<x-app.modal.vertical-modal></x-app.modal.vertical-modal>
<div class="flex">
    <aside class="w-1/6 text-gray-500 font-light border-r h-screen flex flex-col justify-between fixed">
        <div>
            <div class="p-8">
                <img src={{ asset('assets/antena.png') }} alt="gambar antena" class="w-1/3">
                <p class="font-medium text-black">Application Setup Manager</p>
            </div>
            <div>
                <a href="/app/setup" class="block py-3 px-8 hover:bg-gray-100" id="nav-setup">Setup</a>
                <a href="/app/history" class="block py-3 px-8 hover:bg-gray-100" id="nav-history">History</a>
            </div>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="block w-full bg-red-100 text-red-500 font-medium py-3 px-8 text-start cursor-pointer">Logout</button>
        </form>
    </aside>
    <main class="w-5/6 block h-screen ml-[16.6%]">
        <header class="py-6 px-16 bg-gray-100 border-b flex justify-between items-center">
            <p class="font-semibold text-xl" id="page">Setup Page</p>
            <p class="text-lg">Hello, {{ Auth::user()->username }}</p>
        </header>
        <div class="px-16 py-8">
            {{ $slot }}
        </div>
    </main>
</div> --}}

<x-app.modal.horizontal-modal></x-app.modal.horizontal-modal>
<x-app.modal.vertical-modal></x-app.modal.vertical-modal>

<div class="flex flex-col md:flex-row h-screen">

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed md:relative z-50 top-0 left-0 w-64 md:w-1/6 bg-white text-gray-500 font-light border-r h-screen transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col justify-between">
        <div>
            <div class="p-8">
                <img src="{{ asset('assets/antena.png') }}" alt="gambar antena" class="w-1/3">
                <p class="font-medium text-black">Application Setup Manager</p>
            </div>
            <div>
                <a href="/app/setup" class="block py-3 px-8 hover:bg-gray-100" id="nav-setup">Setup</a>
                <a href="/app/history" class="block py-3 px-8 hover:bg-gray-100" id="nav-history">History</a>
            </div>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="block w-full bg-red-100 text-red-500 font-medium py-3 px-8 text-start cursor-pointer">Logout</button>
        </form>
    </aside>

    <!-- Overlay untuk sidebar di mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-30 z-40 hidden md:hidden" onclick="toggleSidebar()"></div>

    <!-- Main Content -->
    <main class="flex-1 ml-0 h-screen overflow-y-auto">
        <header class="py-6 px-6 md:px-16 bg-gray-100 border-b flex justify-between items-center">
            <!-- Toggle button for mobile -->
            <button class="md:hidden text-gray-700 focus:outline-none" onclick="toggleSidebar()">
                ☰
            </button>
            <p class="font-semibold text-xl" id="page">Setup Page</p>
            <p class="text-lg hidden sm:block">Hello, {{ Auth::user()->username }}</p>
        </header>

        <div class="px-6 md:px-16 py-8">
            {{ $slot }}
        </div>
    </main>
</div>

<!-- JavaScript Toggle Function -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }
</script>
