<x-html-head>
    <x-auth.auth-layout>
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-600 px-4 py-2">{{ session("success") }}</div>
        @endif
        @if (session()->has('loginError'))
            <div class="bg-red-200 text-red-600 px-4 py-2">{{ session("loginError") }}</div>
        @endif
        <form action="/login" method="POST" class="flex flex-col gap-4">
            @csrf
            <section>
                <label for="email" class="block mb-1">Email*</label>
                <input type="email" id="email" class="input" name="email" required placeholder="input your email here">
            </section>
            <section>
                <label for="password" class="block mb-1">Password*</label>
                <input type="password" id="password" class="input" name="password" placeholder="input your password here">
            </section>
            <button type="submit" class="btn-primary">Login</button>
            <p>Doesn't have an account? <a href="/register" class="text-[#4152EF]">Please register</a>
        </form>
    </x-auth.auth-layout>
</x-html-head>
