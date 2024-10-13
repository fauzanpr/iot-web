<x-html-head>
    <x-auth.auth-layout>
        <form action="" class="flex flex-col gap-4">
            <section>
                <label for="email" class="block mb-1">Email</label>
                <input type="email" id="email"
                    class="input"
                    placeholder="input your email here">
            </section>
            <section>
                <label for="password" class="block mb-1">Password</label>
                <input type="password" id="password"
                    class="input"
                    placeholder="input your password here">
            </section>
            <button type="submit"
                class="btn-primary">Login</button>
            <p>Doesn't have an account? <a href="/register" class="text-[#4152EF]">Please register</a>
        </form>
    </x-auth.auth-layout>
</x-html-head>
