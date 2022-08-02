<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form method="post" action="/register">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                    username
                </label>
                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="username"
                       id="username"
                       required
                >
            </form>
        </main>
    </section>
</x-layout>