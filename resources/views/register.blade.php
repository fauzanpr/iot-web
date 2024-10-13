<x-html-head>
    <x-auth.auth-layout type="register">
        <form action="" class="flex flex-col gap-4">
            <section>
                <label for="username" class="block mb-1">Username</label>
                <input type="text" class="input" id="username" placeholder="Insert your username here">
            </section>
            <section>
                <label for="email">Email</label>
                <input type="email" class="input" id="email" placeholder="Insert your email here">
            </section>
            <section>
                <label for="password">Password</label>
                <input type="password" class="input" id="password" placeholder="Insert your password here">
            </section>
            <button type="submit" class="btn-primary">Register</button>
            <p>Have account? <a href="/login" class="text-[#4152EF]">Login here</a></p>
        </form>
    </x-auth.auth-layout>
</x-html-head>
