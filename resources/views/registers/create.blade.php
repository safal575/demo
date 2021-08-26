<x-layouts>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 bg-gray-100 border border-gray-300 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/registers" class="mt-10">
                
                @csrf
                <x-form.input name="name" />

                <x-form.input name="username" />

                <x-form.input name="email" type="email" />

                <x-form.input name="password" type="password" />

                <div class="mb-6">
                    <x-primary-button>register</x-primary-button>
                </div>
            </form>
        </main>
    </section>
</x-layouts>