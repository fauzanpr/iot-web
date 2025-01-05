<x-html-head>
    <x-auth.auth-layout type="register">
        <form action="/register" method="POST" class="flex flex-col gap-4">
            @csrf
            <section>
                <label for="username" class="block mb-1">Username</label>
                <input type="text" class="input" id="username" name="username" placeholder="Insert your username here"
                    value={{ old('username') }}>
                {{-- menampilkan error ketika username error saat register --}}
                @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </section>
            <section>
                <label for="email">Email</label>
                <input type="email" class="input" id="email" name="email" placeholder="Insert your email here"
                    value={{ old('email') }}>
                {{-- menampilkan error ketika email error saat register --}}
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </section>
            <section>
                <label for="password">Password</label>
                <input type="password" class="input" id="password" name="password"
                    placeholder="Insert your password here" value={{ old('password') }}>
                {{-- menampilkan error ketika password error saat register --}}
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </section>
            <button type="submit" class="btn-primary">Register</button>
            <p>Have account? <a href="/login" class="text-[#4152EF]">Login here</a></p>
        </form>
    </x-auth.auth-layout>
</x-html-head>
