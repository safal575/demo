<x-layouts>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 bg-gray-100 border border-gray-300 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form method="POST" action="/sessions" class="mt-10">
                @csrf
                <x-form.input name="email" type="email" aria-autocomplete="username" />
                <x-form.input name="password" type="password" aria-autocomplete="new-password" />

                <div class="mb-6">
                   <x-primary-button>Log In</x-primary-button>
                </div>
            </form>
        </main>
    </section>
</x-layouts>