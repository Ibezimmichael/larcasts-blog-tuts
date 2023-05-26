<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 py-6 rounded-xl border-gray-200">
            <h1 class="text-center font-bold text-xl">Login</h1>
            <form action="/sessions" method="POST" class="mt-10 px-3">
                @csrf


                <div class="mb-6">
                    <label
                        for="email"
                        class="inline-block text-lg mb-2"
                        >Email</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        id="email"
                        value="{{old('email')}}"
                    />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-lg mb-2"
                        >Password</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password"
                        id="password"
                    />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Signin
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>


                @if ($errors->any())
                    <ul>
                        @foreach ($errors as $error)
                            <li class="text-red text-xs">{{$error}}</li>
                        @endforeach

                    </ul>
                @endif





            </form>
        </main>
    </section>
</x-layout>
