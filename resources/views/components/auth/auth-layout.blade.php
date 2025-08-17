<main class="flex flex-col lg:flex-row justify-center lg:justify-normal items-center h-screen">
    <section class="lg:w-1/2 p-16 flex flex-col gap-6">
        <h3 class="text-3xl">Welcome to the App</h3>
        @if (isset($type) && $type == 'register')
            <p class="font-light">Please, register first before using this application</p>
        @else
            <p class="font-light">Enter your credential to access this application</p>
        @endif
        {{ $slot }}
    </section>
    <section class="hidden lg:block w-1/2 h-full px-4 pt-4 pr-0">
        <div
            class="bg-[#4152EF] w-full h-full rounded-2xl rounded-b-none rounded-r-none p-8 text-white flex flex-col gap-4 justify-center font-light items-center">
            <p class="text-3xl">Welcome to this Application!</p>
            {{-- <p class="text-lg">this application is Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
            <img src={{ asset('assets/antena.png') }} alt="gambar antena"
                class="w-2/3 bg-gray-200 border-2 border-white rounded-lg">
            <p class="mt-8 bg-white text-blue-500 rounded-2xl px-4 py-1 font-medium">copyright &copy; Polinema 2025</p>
        </div>
    </section>
</main>
